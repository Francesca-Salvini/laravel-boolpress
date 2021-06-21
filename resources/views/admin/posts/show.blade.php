@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success">Modifica post</a>
        <h1>{{ $post->title }}</h1>

        <div>{{ $post->slug }}</div>
        <p>{{ $post->content }}</p>
    </div>
@endsection