<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','adult','backdrop_path','genre_ids','original_language','original_title','overview','popularity','poster_path','release_date','title','video','vote_average','vote_count'];
}
