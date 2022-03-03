@extends('layouts.main')

@section('contents')
    <h1 class="m-5">Categories</h1>

    <ul>
    @foreach ($categories as $category)
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    @endforeach
    </ul>
    
@endsection