<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SaveDataController extends Controller
{
    public function save()
    {
        //retrieved category list
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

         //create or update category list
          $this->create_category($genres);

        //retrieved movie  list
        foreach ($genres as $genre) {

        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie?'.'&with_genres='.$genre['id'])
            ->json()['results'];

        //  dump($movies);

        $this->create_movies($movies);

        }
        return view('homepage',compact('movies','genres'));
    }

    // method to create or update category in database
    public function create_category($genres)
    {
        foreach ($genres as $genre)
            $cat = Category::updateOrCreate($genre);

    }
    // method to create or update movies list in database
    public function create_movies($movies)
    {
        foreach ($movies as $movie) {
            $movie['genre_ids']=implode("|", $movie['genre_ids']);

            Movie::updateOrCreate($movie);
        }
    }
}
