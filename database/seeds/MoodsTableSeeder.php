<?php

use Illuminate\Database\Seeder;
use App\Mood;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $moods = [
            ["Sunset", "https://pl.scdn.co/images/pl/default/23a47601a47cc01da7b954fe6c5aa6fa7589abc7"],
            ["Sunday Morning", "https://pl.scdn.co/images/pl/default/128ecec14131471f0eb841f0a69252de87157a55"]
        ];

        foreach ($moods as $key => $moodData) {
            $mood = new Mood();

            $mood->created_at = Carbon\Carbon::now()->toDateTimeString();
            $mood->updated_at = Carbon\Carbon::now()->toDateTimeString();
            $mood->title = $moodData[0];
            $mood->image_url = $moodData[1];

            $mood->save();
        }
    }

}
