<?php namespace App\Http\Controllers;

class PagesController {

	public function index()
    {

        $name = 'John Doe';

        $lessons = ['My first lesson', 'My second lesson', 'My third lesson'];

        return view('pages.home', compact('name', 'lessons'));
//        return view('pages.home')->withName('Michael Crichton');
    }

    public function about()
    {
        return view('pages.about');
    }

}
