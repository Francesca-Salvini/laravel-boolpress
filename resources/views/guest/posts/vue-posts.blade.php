@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('footer-scripts')
    <script src="{{ asset('js/posts.js') }}"></script>
@endsection


@section('content')
    <div class="container">
        <div id="root">
            <!-- la chiocciola davanti alle parentesi graffe serve per non far interferire blade e vue. il backend "viene prima" del frontend -->
            <h1>@{{ title }}</h1>

            <div class="row">
                <div v-for="post in posts" class="col-6">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">@{{ post.title }}</h5>
                        <p class="card-text">@{{ post.content }}</p>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>

        

    
    </div>
@endsection