@extends('master')

@section('content')

<h1>{{ $name }}</h1>

<ul>
    @foreach ($lessons as $lesson)
    <li>{{ $lesson }}</li>
    @endforeach
</ul>

@stop