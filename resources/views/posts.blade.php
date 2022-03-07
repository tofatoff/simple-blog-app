@extends('layouts.main')

@section('contents')
    <h1 class="m-5">{{ $title }}</h1>

    <div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <h4>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h4>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
    
@endsection