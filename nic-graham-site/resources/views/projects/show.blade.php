@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold mb-4">{{ $post['meta']['title'] }}</h1>
    <p class="text-gray-400 mb-8">{{ $post['meta']['date'] }}</p>
    <div class="prose prose-invert max-w-none">
        {!! $post['content'] !!}
    </div>
</div>
@endsection