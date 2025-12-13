@extends('layouts.app', ['title' => 'Cinema Hub - Home'])

@section('content')
    <div class="home-page-content">

        @include('partials.nav-filters')

        <section class="movie-listings">
            @foreach ($movies as $movie)
                <x-movie-card :movie="$movie"/>
            @endforeach
        </section>

    </div>
@endsection
