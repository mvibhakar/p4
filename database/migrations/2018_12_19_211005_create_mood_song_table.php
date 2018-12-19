<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoodSongTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('mood_song', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('song_id')->unsigned();
            $table->integer('mood_id')->unsigned();

            $table->foreign('song_id')->references('id')->on('songs');
            $table->foreign('mood_id')->references('id')->on('moods');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mood_song');
    }
}
