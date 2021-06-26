@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Giallo Zafferano</h1>

        <h2>Ricette categoria: {{ $category->name }}</h2>

        <ul>
            @foreach($related_posts as $post)
                <li>
                    <a href="{{ route('blog-page', ['slug' => $post->slug] ) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection