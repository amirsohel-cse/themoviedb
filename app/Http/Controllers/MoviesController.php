<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function index()
    {
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $movies = [];

        return view('homepage',compact('genres','movies'));
    }
    public function movies($genres_id)
    {
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie?'.'&with_genres='.$genres_id)
            ->json()['results'];
         // dump($movies);

        return view('homepage',compact('movies','genres'));
    }
}
