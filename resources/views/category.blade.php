@extends('layouts.main')

@section('contents')
    <h1 class="m-5">Posts Category : {{ $category }}</h1>
{{-- 
    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach --}}
    
@endsection