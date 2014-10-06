<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent {

    /**
     * Fillable fields for a song
     *
     * @var array
     */
    protected $fillable = [
        'title', 'lyrics'
    ];

}