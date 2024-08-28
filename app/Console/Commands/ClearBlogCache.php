<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearBlogCache extends Command
{
    protected $signature = 'blog:clear-cache';
    protected $description = 'Clear the blog and project caches';

    public function handle()
    {
        Cache::forget('blog_posts');
        Cache::forget('projects');

        $this->info('Blog and project caches have been cleared.');
    }
}