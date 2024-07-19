<?php

namespace App\Http\Controllers;

use App\Helpers\MarkdownParser;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Cache::remember('projects', 1800, function () {
        //     return MarkdownParser::getAll(resource_path('content/projects'));
        // });

        // return view('projects.index', compact('projects'));
        return view('placeholder');
    }

    public function show($slug)
    {
        $project = Cache::remember("project_{$slug}", 1800, function () use ($slug) {
            return MarkdownParser::parse(resource_path("content/projects/{$slug}.md"));
        });

        return view('projects.show', compact('project'));
    }
}