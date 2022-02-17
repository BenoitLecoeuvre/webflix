@extends('layouts.base')

@section('content')
    <h1>Les films</h1>
    
    <a href="/exercices/movies/new">Ajouter un film</a>
    
    <h2>Liste des films:</h2>

    <ul>
    @foreach ($movies as $movie)
        <li><a href="/exercices/movies/{{ $movie->id }}">
            {{ $movie->title }}
        </a></li>
    @endforeach
    </ul>
@endsection