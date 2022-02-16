@extends('layouts.base')

@section('content')
    <h1>{{$name}}</h1>

    <ul>
    @foreach ($devteam as $user)
        <li><a href="/a-propos/{{ $user }}">{{ $user }}</a></li>
    @endforeach
    </ul>
@endsection