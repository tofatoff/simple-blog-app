@extends('layouts.main')

@section('contents')
<h1 class="m-5">{{ $post->title }}</h1>

<p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->body !!}

<a href="/posts" class="d-block mt-5">Back to posts</a>

@endsection