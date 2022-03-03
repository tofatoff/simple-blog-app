@extends('layouts.main')

@section('contents')
<h1 class="m-5">{{ $post->title }}</h1>

{!! $post->body !!}

<a href="/posts">Back to posts</a>

@endsection