@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Giallo Zafferano</h1>

        <h2>Le nostre categorie</h2>

        <div class="row">
            @foreach($categories as $category)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }} </h5>
                            <a href="{{ route('category-page', ['slug' => $category->slug]) }}" class="btn btn-primary">Guarda le ricette di questa categoria</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection