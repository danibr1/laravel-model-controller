@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>MOVIES</h1>

        @forelse ($movies as $movie)
            <article>
                <h3>{{ $movie->title }}</h3>
                <h4>{{ $movie->original_title }}</h4>
                <div>{{ $movie->nationality }}</div>
                <div>{{ $movie->date }}</div>
                <div>{{ $movie->votes }}</div>
            </article>
        @empty
            <div>Nessun film disponibile</div>
        @endforelse
    </div>
@endsection
