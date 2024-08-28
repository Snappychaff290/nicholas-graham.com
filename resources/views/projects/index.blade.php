@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <h1 class="section-title">Blog Posts</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $slug => $post)
            <div class="card">
                <img src="{{ asset('images/blog/' . ($post['meta']['image'] ?? 'default.jpg')) }}" alt="{{ $post['meta']['title'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $post['meta']['title'] }}</h2>
                    <p class="text-gray-400 mb-4">{{ $post['meta']['date'] }}</p>
                    <a href="{{ route('blog.show', $slug) }}" class="text-primary hover:underline">Read more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection