<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Mood;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::orderBy('title')->get();

        return $songs;
    }

    public function findById($id)
    {
        return Song::find($id);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'album' => 'required',
            'spotify_url' => 'required|url',
            'image_url' => 'required|url'
        ]);

        $song = new Song();

        $song->title = $request->title;

        $song->artist = $request->artist;
        $song->album = $request->album;
        $song->spotify_url = $request->spotify_url;
        $song->image_url = $request->image_url;
        $song->save();

        return redirect('/songs')->with([
            'alert' => 'Your song was added.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'album' => 'required',
            'spotify_url' => 'required|url',
            'image_url' => 'required|url'
        ]);
        $song = Song::find($id);
        $song->title = $request->title;
        $song->artist = $request->artist;
        $song->album = $request->album;
        $song->spotify_url = $request->spotify_url;
        $song->image_url = $request->image_url;
        $song->save();
        return redirect('/songs')->with([
            'alert' => 'Your song was edited.'
        ]);
    }

    public function delete($id)
    {
        $song = Song::find($id);
        if (!$song) {
            return redirect('/songs')->with('alert', "This song doesn't exist.");
        }
        else {
            $song->moods()->detach();
            $song->delete();
            return redirect('/songs')->with('alert', '"' . $song->title . '" was deleted.');
        }
    }
}
