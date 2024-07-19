@extends('layouts.app')

@section('content')
<div class="container">
    <article class="blog-post">
        <img src="{{ asset('img/blog/' . ($post['meta']['image'] ?? 'default.jpg')) }}" alt="{{ $post['meta']['title'] }} - Thumbnail">
        <h1>{{ $post['meta']['title'] }}</h1>
        <p class="date">{{ $post['meta']['date'] }}</p>
        <div class="content">
            {!! $post['content'] !!}
        </div>
    </article>
</div>
@endsection