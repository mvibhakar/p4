<?php

use Illuminate\Database\Seeder;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $songs = [
            ["Dreams", "Fleetwood Mac", "Rumours", "https://open.spotify.com/track/703BT1NQsfIwPFv8MXQ47m?si=JislDlHFQ_a53HvWWSNBpw", "https://i.scdn.co/image/9e1484c528939f05c09f062fd482d7d07a7bf263"],
            ["September", "Earth, Wind & Fire", "The Eternal Dance", "https://open.spotify.com/track/5nNmj1cLH3r4aA4XDJ2bgY?si=btfrTWz5SjasUprNw7VOWA", "https://i.scdn.co/image/9a29e448a04544a6d05cec4f152333381bb96a0c"],
            ["Herside Story", "Hare Squead", "Supernormal - EP", "https://open.spotify.com/track/5dlZero0Alg0iLaIYWbVUP", "https://i.scdn.co/image/642a2974eb78ca941df3737c6a51d59ae1385a53"],
            ["Bohemian Rhapsody", "Queen", "A Night at the Opera", "https://open.spotify.com/track/7tFiyTwD0nx5a1eklYtX2J", "https://i.scdn.co/image/f6e02ce8bc9e91afa0e220703072c20bf72c72c5"],
            ["Better", "Khalid", "Suncity", "https://open.spotify.com/track/6zeeWid2sgw4lap2jV61PZ", "https://i.scdn.co/image/745289626882a42ef6e89ccc2ea06110518fb23c"],
            ["Royals", "Lorde", "Pure H", "https://open.spotify.com/track/2dLLR6qlu5UJ5gk0dKz0h3", "https://i.scdn.co/image/f06f0658ccc185e6e884fe4af76b217c4fe478c7"],
            ["Crazy", "Gnarls Barkley", "St. Elsewhere", "https://open.spotify.com/track/6FlAGda9qkDhTU7ctFM4uG", "https://i.scdn.co/image/f77997d963a9ab47cd640bbbfbf68cf440ec52ce"],
            ["What About Us", "P!nk", "Beautiful Trauma", "https://open.spotify.com/track/0Qh38w01QRXK6KHIv0e3hb", "https://i.scdn.co/image/8b5da3836c506525367980ed412451ec08feef68"],
            ["Hello", "Adele", "25", "https://open.spotify.com/track/4sPmO7WMQUAf45kwMOtONw", "https://i.scdn.co/image/602102500b9cebde7559a5f9c16daaaef2846440"]
        ];

        foreach ($songs as $key => $songData) {
            $song = new Song();

            $song->created_at = Carbon\Carbon::now()->toDateTimeString();
            $song->updated_at = Carbon\Carbon::now()->toDateTimeString();
            $song->title = $songData[0];
            $song->artist = $songData[1];
            $song->album = $songData[2];
            $song->spotify_url = $songData[3];
            $song->image_url = $songData[4];

            $song->save();
        }
    }
}
