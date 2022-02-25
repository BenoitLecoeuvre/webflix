@extends('layouts.base')

@section('content')
<a href="/films/creer" class="btn btn-primary mb-5">Insérer un film</a>

<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    @foreach ($movies as $movie)
        @include('partials.movie')
    @endforeach
</div>

{{ $movies->links() }}
@endsection