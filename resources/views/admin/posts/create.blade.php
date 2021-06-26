@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Crea un nuovo post</h1>

        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        <!-- create form -->
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            @method ('POST')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea  class="form-control" id="content" name="content" cols="30" rows="10">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Nessuna</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">

                <h5>Tags</h5>

                @foreach($tags as $tag)
                    <div class="form-check">
                        <input class="form-check-input" name="tags[]" type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tag-{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            

            <input type="submit" class="btn btn-success" value="Salva post">
        </form>
        <!-- end create form -->
    </div>
@endsection