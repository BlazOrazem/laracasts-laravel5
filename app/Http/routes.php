<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
| this is a test
*/

Route::bind('song', function($slug)
{
    return App\Song::where('slug', $slug)->first();
});

get('/', 'PagesController@index');
get('about', 'PagesController@about');

get('songs', 'SongsController@index');
get('songs/{song}', 'SongsController@show');
get('songs/{song}/edit', 'SongsController@edit');
patch('songs/{song}', 'SongsController@update');