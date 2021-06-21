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
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea  class="form-control" id="content" name="content" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" class="btn btn-success" value="Salva post">
        </form>
        <!-- end create form -->
    </div>
@endsection