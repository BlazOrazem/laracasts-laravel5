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

$router->bind('songs', function($slug)
{
    return App\Song::whereSlug($slug)->first();
});

$router->resource('songs', 'SongsController', [
//    'except' => ['destroy']
]);

//$router->get('songs', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
//$router->get('songs/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);
//$router->get('songs/{song}/edit', ['as' => 'song_edit_path', 'uses' => 'SongsController@edit']);

//$router->resource('songs', 'SongsController');

//
//$router->get('/', 'PagesController@index');
//$router->get('about', 'PagesController@about');
//
//$router->get('songs', 'SongsController@index');
//$router->get('songs/{song}', 'SongsController@show');
//$router->get('songs/{song}/edit', 'SongsController@edit');
//patch('songs/{song}', 'SongsController@update');
//$router->bind('songs', function($slug)
//{
//    return App\Song::where('slug', $slug)->first();
//});

//$router->get('songs', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
//$router->get('songs/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);
//$router->get('songs/{song}/edit', ['as' => 'song_edit_path', 'uses' => 'SongsController@edit']);

//$router->resource('people', 'PeopleController');

//$router->resource('songs', 'SongsController', [
//    'names' => [
//        'index' => 'songs_path',
//        'show'  => 'song_path',
//        'edit'  => 'song_edit_path'
//    ],
//    'only' => ['index', 'show', 'edit'],
//    'except' => ['create']
//]);

