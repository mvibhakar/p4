<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'artist', 'album', 'spotify_url', 'image_url'];

    public function moods()
    {
        return $this->belongsToMany('App\Mood')->withTimestamps();
    }
}
