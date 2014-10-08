@extends('master')

@section('content')

    <h2>{{$song->title}}</h2>

    @if ($song->lyrics)
        <article class="lyrics">
            {!! nl2br($song->lyrics) !!}
        </article>

        <p><br />{!! link_to_route('songs.index', 'Go back home', [$song->slug]) !!}</p>
    @endif

@stop