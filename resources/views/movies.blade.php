@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-5">MOVIES</h1>

        <div class="container flex flex-wrap jc-center text-center">

            @forelse ($movies as $movie)
                <div class="card">
                    <h3 class="title">{{ $movie->title }}</h3>
                    <div>{{ $movie->original_title }}</div>
                    <div>{{ $movie->nationality }}</div>
                    <div>{{ $movie->date }}</div>
                    <div>{{ $movie->votes }}</div>
                </div>
            @empty
                <div>Nessun film disponibile</div>
            @endforelse
        </div>
    </div>
@endsection
