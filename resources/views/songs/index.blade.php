@extends('master')

@section('content')

    <ul>
    @foreach ($songs as $song)
        <li><a href="/songs/{{$song->slug}}">{{$song->title}}</a></li>
    @endforeach
    </ul>

@stop