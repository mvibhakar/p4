<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    protected $fillable = ['title', 'image_url'];

    public function songs()
    {
        return $this->belongsToMany('App\Song')->withTimestamps();
    }
}
