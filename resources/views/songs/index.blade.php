@extends('master')

@section('content')

    <p><br />{!! link_to_route('songs.create', 'Create a song') !!}<br /></p>

    <ul>
    @foreach ($songs as $song)
        <li>
            <strong>{!! link_to_route('songs.edit', 'EDIT', [$song->slug]) !!} :: </strong>
            {!! link_to_route('songs.show', $song->title, [$song->slug]) !!}
        </li>
    @endforeach
    </ul>

@stop