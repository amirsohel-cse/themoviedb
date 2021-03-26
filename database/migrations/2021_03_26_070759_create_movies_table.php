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
            $table->boolean('adult')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('genre_ids')->nullable();
            $table->string('original_language')->nullable();
            $table->string('original_title')->nullable();
            $table->longText('overview')->nullable();
            $table->double('popularity')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('release_date')->nullable();
            $table->string('title')->nullable();
            $table->boolean('video')->nullable();
            $table->double('vote_average')->nullable();
            $table->integer('vote_count')->nullable();

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
