@extends('layouts.base')

@section('content')
    <h1>{{ $category->name }}</h1>

    <!-- TODO: Grâce à la relation de Laravel, on va afficher les films
    de la catégorie affichée -->
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        @foreach ($category->movies as $movie)
            @include('partials.movie')
        @endforeach
    </div>
@endsection