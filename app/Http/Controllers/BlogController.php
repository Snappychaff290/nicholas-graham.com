<?php

namespace App\Http\Controllers;

use App\Helpers\MarkdownParser;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Cache::remember('blog_posts', 1800, function () {
            return MarkdownParser::getAll(resource_path('content/blog'));
        });

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Cache::remember("blog_post_{$slug}", 1800, function () use ($slug) {
            return MarkdownParser::parse(resource_path("content/blog/{$slug}.md"));
        });

        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'The blog post you were looking for was not found.');
        }

        return view('blog.show', compact('post'));
    }
}