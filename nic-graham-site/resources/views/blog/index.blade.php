@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <div class="blog-list">
        @foreach ($posts as $slug => $post)
        <a href="{{ route('blog.show', $slug) }}" class="read-more">
            <div class="blog-card">
                <img src="{{ asset('img/blog/' . ($post['meta']['image'] ?? 'default.jpg')) }}" alt="{{ $post['meta']['title'] }} - Thumbnail">
                <div class="blog-card-content">
                    <h2>{{ $post['meta']['title'] }}</h2>
                    @if(isset($post['meta']['description']))
                        <p class="description">{{ Str::limit($post['meta']['description'], 100) }}</p>
                    @endif
                    <p class="date">{{ $post['meta']['date'] }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection