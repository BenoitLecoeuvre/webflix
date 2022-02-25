<div class="col">
    <a class="text-reset" href="/films/{{ $movie->id }}">
        <img src="{{ $movie->cover }}" class="img-fluid" alt="{{ $movie->title }}">
    </a>

    <a class="text-reset" href="/films/{{ $movie->id }}">{{ $movie->title }}</a>
    <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->category?->name }} | {{ $movie->formatDuration() }}</p>
</div>