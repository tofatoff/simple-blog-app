@extends('layouts.main')

@section('contents')
<h1 class="m-5">{{ $post->title }}</h1>

<p>By Lorem ipsum in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}

<a href="/posts">Back to posts</a>

@endsection