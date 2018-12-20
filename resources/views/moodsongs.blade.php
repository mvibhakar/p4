@extends('layouts.master')

@section('title')
    {{ $mood->title }}
@endsection

@section('content')

    <div class='container large-cards'>
        <div class="jumbotron">
            <h1 class="display-4">{{ $mood->title }}</h1>
            <hr class="my-4">
            <div class='card-deck'>
                @foreach($mood->songs as $song)
                    <div class='col-sm-4 small-cards'>
                        <div class='card'>
                            <img class="card-img-top" src="{{ $song->image_url }}" alt="Song Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $song->title }}</h5>
                                <p class="card-text"><i>{{ $song->artist }}</i></p>
                                <p class="card-text">{{ $song->album }}</p>
                                <a href='{{ $song->spotify_url }}' target='_blank' class="btn btn-success">Spotify</a>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            @if(count($mood->songs) == 0)
                <div>
                    <h1 class="display-5">No songs in this mood.</h1>
                </div>
            @endif
        </div>
    </div>
@endsection