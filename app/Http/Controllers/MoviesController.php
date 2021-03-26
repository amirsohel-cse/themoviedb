<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function index()
    {
        $movies = [];
        //retrieved category list
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        //create or update category list
      //  $this->create_category($genres);

        return view('homepage',compact('genres','movies'));
    }
    public function movies($genres_id)
    {
        //retrieved category list
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        //retrieved movie  list
        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie?'.'&with_genres='.$genres_id)
            ->json()['results'];

        //  dump($movies);

        return view('homepage',compact('movies','genres'));
    }

}
