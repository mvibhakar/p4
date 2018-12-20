@extends('layouts.master')

@section('title')
    Create a Mood
@endsection

@section('content')
    <div class='container large-cards'>
        <form class='card' method='POST' action='/api/moods'>
            {{ csrf_field() }}
            <nav class="navbar navbar-expand navbar-light bg-light">
                <a class="navbar-brand">create a mood</a>
            </nav>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">title</label>
                    <input type="text"
                           name='title'
                           value='{{old('title')}}'
                           class="form-control col-sm-9"
                           id="title"
                           placeholder="mood title">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="image_url">mood image link</label>
                    <input type="text"
                           name='image_url'
                           value='{{old('image_url')}}'
                           class="form-control col-sm-9"
                           id="image_url"
                           placeholder="link to mood image link">
                </div>
                <div id='song-choices'>
                    <h5>select songs for this mood:</h5>
                    @foreach($songs as $song)
                        {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="checkbox" name='{{ $song->id }}'>--}}
                        {{--<label class="form-check-label">--}}
                        {{--{{ $song->title }}--}}
                        {{--</label>--}}
                        {{--</div>--}}

                        <label>
                            <input
                                    {{ (in_array($song->id, old('songs', []) )) ? 'checked' : '' }}
                                    type='checkbox'
                                    name='songs[]'
                                    value='{{ $song->id }}'>
                            {{ $song->title }}
                        </label>

                    @endforeach
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