@extends('layouts.master')

@section('title')
    Edit Song
@endsection

@section('content')
    <div class='container large-cards'>
        <form class='card' method='POST' action='/api/songs/{{ $song-> id }}'>
            {{ csrf_field() }}
            <nav class="navbar navbar-expand navbar-light bg-light">
                <a class="navbar-brand">edit a song</a>
            </nav>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">title</label>
                    <input type="text"
                           name='title'
                           value='{{ $song->title }}'
                           class="form-control col-sm-9"
                           id="title"
                           placeholder="song title">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="artist">artist</label>
                    <input type="text"
                           name='artist'
                           value='{{ $song->artist }}'
                           class="form-control col-sm-9"
                           id="artist"
                           placeholder="artist name">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="album">album</label>
                    <input type="text" value='{{ $song->album }}'
                           name='album'
                           class="form-control col-sm-9"
                           id="album"
                           placeholder="album name">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="spotify_url">spotify link</label>
                    <input type="text"
                           name='spotify_url'
                           value='{{ $song->spotify_url }}'
                           class="form-control col-sm-9"
                           id="spotify_url"
                           placeholder="e.g. https://open.spotify.com/song">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="image_url">album art link</label>
                    <input type="text"
                           name='image_url'
                           value='{{ $song->image_url }}'
                           class="form-control col-sm-9"
                           id="image_url"
                           placeholder="link to album cover art image">
                </div>
                <button type="submit" class="btn btn-primary col align-self-center">Submit</button>
            </div>
        </form>
        @if(count($errors) > 0)
            <br>
            <div class='alert alert-danger'>
                <ul id='errors'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection