<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('id');
            $table->boolean('adult');
            $table->string('backdrop_path');
            $table->string('genre_ids');
            $table->string('original_language');
            $table->string('original_title');
            $table->longText('overview');
            $table->double('popularity');
            $table->string('poster_path');
            $table->date('release_date');
            $table->string('title');
            $table->boolean('video');
            $table->double('vote_average');
            $table->integer('vote_count');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
