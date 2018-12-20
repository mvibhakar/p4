@extends('layouts.master')

@section('title')

@endsection

@section('content')
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand">songs</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/songs/create">add a song</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class='container large-cards'>
        <div class='card-deck'>
            @foreach($songs as $song)
                <div class='col-sm-4 small-cards'>
                    <div class='card'>
                        <img class="card-img-top" src="{{ $song->image_url }}" alt="Song Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text"><i>{{ $song->artist }}</i></p>
                            <p class="card-text">{{ $song->album }}</p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href='{{ $song->spotify_url }}' target='_blank' class="btn btn-success">spotify</a>
                                <a href='/songs/edit/{{ $song->id }}' class="btn btn-secondary">edit</a>
                                <a href="/songs/delete/{{ $song->id }}" class="btn btn-danger">delete</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection