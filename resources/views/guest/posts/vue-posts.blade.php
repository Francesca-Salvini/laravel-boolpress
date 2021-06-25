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
        <h1>Lista post tramite Vuejs</h1>

    
    </div>
@endsection