<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\MovieShowing;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moviesData = [
            [
                'title' => 'Праздники',
                'genres' => 'комедия, семейный',
                'age_rating' => '6+',
                'poster_path' => 'prazdniki.svg',
                'showings' => [
                    ['time' => '17:45', 'price' => 2800, 'format' => '2D', 'hall' => 'Зал 2'],
                    ['time' => '19:40', 'price' => 3200, 'format' => '2D', 'hall' => 'Зал 2'],
                    ['time' => '21:30', 'price' => 3500, 'format' => '2D', 'hall' => 'Зал 1'],
                    ['time' => '23:00', 'price' => 3500, 'format' => '2D', 'hall' => 'Зал 1', 'available' => false],
                ],
            ],
            [
                'title' => 'МЕГ 2: Безднa',
                'genres' => 'боевик, фантастика',
                'age_rating' => '16+',
                'poster_path' => 'meg2.svg',
                'showings' => [
                    ['time' => '15:30', 'price' => 4000, 'format' => '3D', 'hall' => 'Зал 3'],
                    ['time' => '17:45', 'price' => 4500, 'format' => '3D', 'hall' => 'Зал 3'],
                    ['time' => '19:15', 'price' => 4500, 'format' => '3D', 'hall' => 'Зал 3', 'available' => false],
                ],
            ],
            [
                'title' => 'Заложники',
                'genres' => 'экшен, триллер',
                'age_rating' => '16+',
                'poster_path' => 'zalozhniki.svg',
                'showings' => [
                    ['time' => '16:10', 'price' => 4030, 'format' => '2D', 'hall' => 'Зал 1'],
                    ['time' => '21:30', 'price' => 3080, 'format' => '2D', 'hall' => 'Зал 1'],
                ],
            ],
            [
                'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                'genres' => 'мультфильм, фэнтези',
                'age_rating' => '0+',
                'poster_path' => 'ladybug.svg',
                'showings' => [
                    ['time' => '14:10', 'price' => 2500, 'format' => '3D', 'hall' => 'Зал 4'],
                    ['time' => '16:00', 'price' => 3000, 'format' => '3D', 'hall' => 'Зал 4'],
                    ['time' => '20:00', 'price' => 3000, 'format' => '3D', 'hall' => 'Зал 4'],
                ],
            ],
            [
                'title' => 'Руслан и Людмила: больше, чем сказка',
                'genres' => 'мультфильм, приключения',
                'age_rating' => '0+',
                'poster_path' => 'ruslan.svg',
                'showings' => [
                    ['time' => '10:15', 'price' => 2000, 'format' => '2D', 'hall' => 'Зал 5'],
                    ['time' => '12:30', 'price' => 2500, 'format' => '2D', 'hall' => 'Зал 5'],
                    ['time' => '14:00', 'price' => 2500, 'format' => '2D', 'hall' => 'Зал 5'],
                ],
            ],
            [
                'title' => 'Оппенгеймер',
                'genres' => 'драма, биография',
                'age_rating' => '18+',
                'poster_path' => 'ruslan.svg',
                'showings' => [
                    ['time' => '18:00', 'price' => 5000, 'format' => 'IMAX', 'hall' => 'IMAX'],
                    ['time' => '21:45', 'price' => 5500, 'format' => 'IMAX', 'hall' => 'IMAX'],
                ],
            ],
            [
                'title' => 'Барби',
                'genres' => 'комедия, фэнтези',
                'age_rating' => '12+',
                'poster_path' => 'ruslan.svg',
                'showings' => [
                    ['time' => '16:45', 'price' => 3500, 'format' => '2D', 'hall' => 'Зал 6'],
                    ['time' => '19:30', 'price' => 4000, 'format' => '2D', 'hall' => 'Зал 6'],
                ],
            ],
            [
                'title' => 'Форсаж 10',
                'genres' => 'боевик, триллер',
                'age_rating' => '16+',
                'poster_path' => 'prazdniki.svg',
                'showings' => [
                    ['time' => '20:10', 'price' => 4200, 'format' => '4DX', 'hall' => '4DX'],
                    ['time' => '23:30', 'price' => 4500, 'format' => '4DX', 'hall' => '4DX'],
                ],
            ],
            [
                'title' => 'Индиана Джонс и Колесо судьбы',
                'genres' => 'приключения, фэнтези',
                'age_rating' => '12+',
                'poster_path' => 'ruslan.svg',
                'showings' => [
                    ['time' => '14:50', 'price' => 3800, 'format' => '2D', 'hall' => 'Зал 7'],
                    ['time' => '18:20', 'price' => 4000, 'format' => '2D', 'hall' => 'Зал 7'],
                ],
            ],
            [
                'title' => 'Трансформеры: Восхождение Звероботов',
                'genres' => 'фантастика, боевик',
                'age_rating' => '12+',
                'poster_path' => 'prazdniki.svg',
                'showings' => [
                    ['time' => '17:00', 'price' => 4100, 'format' => '3D', 'hall' => 'Зал 8'],
                    ['time' => '22:00', 'price' => 4300, 'format' => '3D', 'hall' => 'Зал 8'],
                ],
            ],
            [
                'title' => 'Миссия невыполнима: Смертельная расплата. Часть первая',
                'genres' => 'боевик, шпионский',
                'age_rating' => '16+',
                'poster_path' => 'prazdniki.svg',
                'showings' => [
                    ['time' => '19:00', 'price' => 4800, 'format' => '2D', 'hall' => 'Зал 9'],
                    ['time' => '22:45', 'price' => 4800, 'format' => '2D', 'hall' => 'Зал 9'],
                ],
            ],
            [
                'title' => 'Элементарно',
                'genres' => 'мультфильм, комедия',
                'age_rating' => '0+',
                'poster_path' => 'prazdniki.svg',
                'showings' => [
                    ['time' => '11:00', 'price' => 2200, 'format' => '2D', 'hall' => 'Зал 10'],
                    ['time' => '13:00', 'price' => 2500, 'format' => '2D', 'hall' => 'Зал 10'],
                    ['time' => '15:00', 'price' => 2500, 'format' => '2D', 'hall' => 'Зал 10', 'available' => false],
                ],
            ],
        ];

        foreach ($moviesData as $data) {
            $movie = Movie::create([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'poster_path' => $data['poster_path'],
                'age_rating' => $data['age_rating'],
                'genres' => $data['genres'],
                'description' => 'Placeholder description for ' . $data['title'],
            ]);

            foreach ($data['showings'] as $showingData) {
                $timeString = $showingData['time'];
                $dateTime = Carbon::parse($timeString);

                MovieShowing::create([
                    'movie_id' => $movie->id,
                    'showing_time' => $dateTime,
                    'price_tenge' => $showingData['price'],
                    'format' => $showingData['format'],
                    'hall_name' => $showingData['hall'],
                    'is_available' => $showingData['available'] ?? true,
                ]);
            }
        }
    }
}
