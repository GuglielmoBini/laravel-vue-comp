@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <figure class="text-center">
            <img src="{{ asset('storage/' . $videogame->image_url) }}" alt="{{ $videogame->title }}">
        </figure>
        <div class="paragraph">
            <h1 class="mt-4 mb-3">{{ $videogame->title }}</h1>
            <p>{{ $videogame->platform }}</p>
        </div>
    </div>
@endsection
