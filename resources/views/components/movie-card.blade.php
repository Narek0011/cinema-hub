<div class="movie-card">
    <img src="{{ asset('img/posters/' . $movie->poster_path) }}" alt="{{ $movie->title }}" class="img-fluid">

    <span class="movie-title">{{ $movie->title }}</span>

    <div class="movie-genres">
        @foreach (explode(',', $movie->genres) as $genre)
            <span class="genre-tag">{{ trim($genre) }}</span>
        @endforeach
    </div>

    <div class="movie-showings">
        @foreach ($movie->showings as $showing)
            <div class="showing-info">
                <a href="#"
                   class="showing-block {{ $showing->is_available ? 'available' : 'sold-out' }}">
                    <div class="showing-time">{{ $showing->showing_time->format('H:i') }}</div>
                    <div class="showing-details">
                        <span class="format">{{ $showing->format }}</span>
                        <span class="price">{{ $showing->price_tenge }} ₸</span>
                    </div>
                </a>
                <span class="hall-name">{{ $showing->hall_name }}</span>
            </div>
        @endforeach
    </div>
</div>
