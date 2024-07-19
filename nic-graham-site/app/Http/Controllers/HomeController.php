<?php

namespace App\Http\Controllers;

use App\Helpers\MarkdownParser;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $recentPost = Cache::remember('recent_blog_post', 1800, function () {
            $posts = MarkdownParser::getAll(resource_path('content/blog'));
            if (!empty($posts)) {
                $latestSlug = array_key_first($posts);
                return [
                    'post' => $posts[$latestSlug],
                    'slug' => $latestSlug
                ];
            }
            return null;
        });

        return view('home', $recentPost);
    }

    public function services()
    {
        return view('placeholder');
    }

    public function about()
    {
        return view('placeholder');
    }

    public function portfolio()
    {
        return view('placeholder');
    }

    public function contact()
    {
        return view('placeholder');
    }

    public function puter()
    {
        return view('placeholder');
    }

    public function notFound()
    {
        return redirect()->route('home')->with('error', 'The page you were looking for was not found.');
    }
}