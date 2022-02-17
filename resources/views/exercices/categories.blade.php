@extends('layouts.base')

@section('content')
    <h1>Catégories</h1>

    <a href="/exercices/categories/creer">Créer une catégorie</a>

    <ul>
    @foreach ($categories as $category)
        <li><a href="/exercices/categories/{{ $category->id }}">{{ $category->name }}</a></li>
    @endforeach
    </ul>
@endsection
