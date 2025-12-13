<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::take(6)->get();

        $featuredMovie = Movie::first();

        return view('pages.home.index', [
            'movies' => $movies,
            'featuredMovie' => $featuredMovie,
        ]);
    }
}
