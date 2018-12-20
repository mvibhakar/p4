@extends('layouts.master')


@section('title')
    Moods
@endsection


@section('content')
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand">moods</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/moods/create">set a mood</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class='container large-cards'>
        <div class='card-deck'>
            @foreach($moods as $mood)
                <div class='col-sm-4 small-cards'>
                    <div class='card'>
                        <a href='/moods-songs/{{ $mood->id }}'>
                            <img class="card-img-top" src="{{ $mood->image_url }}" alt="Mood Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $mood->title }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection