@extends('master')

@section('content')

    <ul>
    @foreach ($songs as $song)
        <li>
            <strong><a href="/songs/{{$song->slug}}/edit/">EDIT</a> :: </strong>
            <a href="/songs/{{$song->slug}}">{{$song->title}}</a>
        </li>
    @endforeach
    </ul>

@stop