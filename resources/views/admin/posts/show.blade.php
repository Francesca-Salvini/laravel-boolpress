@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success">Modifica post</a>
        @if($post->category)

            <div class="mt-2 mb-2">Categoria: {{ $post_category->name }}</div>
        @endif

        <h1>{{ $post->title }}</h1>

        @if($post->cover)
        <div class="mt-2 mb-2">
        <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}"></div>
        @endif

        <div>{{ $post->slug }}</div>

        <div class="mt-2 mb-2">
            <strong>Tags: </strong>
            @foreach ($post_tags as $tag)
                {{ $tag->name }}{{ $loop->last ? '' : ', '}}
            @endforeach
        </div>

        <p>{{ $post->content }}</p>
    </div>
@endsection