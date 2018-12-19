<?php

use Illuminate\Database\Seeder;
use App\Mood;
use App\Song;

class MoodSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $moods = [
            'Sunset' => ["Dreams", "September", "Royals", "What About Us", "Better"],
            'Sunday Morning' => ["Dreams", "Hello", "Herside Story", "Bohemian Rhapsody", "Crazy"]
        ];

        foreach ($moods as $title => $songs) {
            $mood = Mood::where('title', 'like', $title)->first();

            foreach ($songs as $songName) {
                $song = Song::where('title', 'like', $songName)->first();

                $mood->songs()->save($song);
            }
        }
    }
}
