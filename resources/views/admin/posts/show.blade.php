@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success">Modifica post</a>
    @if($post->category)

        <div class="mt-2 mb-2">Categoria: {{ $post->category->name }}</div>
    @endif
        
        <h1>{{ $post->title }}</h1>

        <div>{{ $post->slug }}</div>
        <p>{{ $post->content }}</p>
    </div>
@endsection