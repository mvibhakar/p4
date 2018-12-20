<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Validator;
use App\Song;
use App\Mood;

class MoodController extends Controller
{
    public function index()
    {
        $moods = Mood::orderBy('title')->get();

        return $moods;
    }

    public function create(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'image_url' => 'required|url'
        ]);

        $mood = new Mood();

        $mood->title = $request->title;
        $mood->image_url = $request->image_url;

        $mood->save();

        $mood->songs()->sync($request->songs);

        return redirect('/moods')->with([
            'alert' => 'Your mood was created.'
        ]);
    }

    public function moodWithSongs($id)
    {
        $mood = Mood::with('songs')->find($id);

        return $mood;
    }
}
