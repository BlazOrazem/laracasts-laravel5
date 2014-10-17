@extends('master')

@section('content')

<h2>{{$song->title}}</h2>

    {!! Form::model($song, ['route' => ['songs.update', $song->slug], 'method' => 'PATCH']) !!}

        @include('songs._form')

    {!! Form::close() !!}

    {!! delete_form(['songs.destroy', $song->slug], 'Delete Song') !!}

@stop