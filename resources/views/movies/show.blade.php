@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-lg-5">
        <img src="{{ $movie->cover }}" class="img-fluid" alt="{{ $movie->title }}">
    </div>
    <div class="col-lg-7">
        <div class="card shadow">
            <div class="card-body">
                <h1>{{ $movie->title }}</h1>
                <p>{{ $movie->released_at }} | {{ $movie->duration }}</p>
                <div class="mb-4">
                    {{ $movie->synopsys }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection