@extends('layouts.base')

@section('content')
<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    @foreach ($movies as $movie)
        <div class="col">
            <a class="text-reset" href="/films/{{ $movie->id }}">
                <img src="{{ $movie->cover }}" class="img-fluid" alt="{{ $movie->title }}">
            </a>

            <a class="text-reset" href="/films/{{ $movie->id }}">{{ $movie->title }}</a>
            <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->formatDuration() }}</p>
        </div>
    @endforeach
</div>

{{ $movies->links() }}
@endsection