<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller {

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * @return View
     */
    public function index()
    {
        $songs = $this->song->get();

        return view('songs.index', compact('songs'));
    }

    /**
     * @param $slug
     * @return View
     */
    public function show(Song $song)
    {
//        $song = $this->song->whereSlug($slug)->first();

        return view('songs.show', compact('song'));
    }

    /**
     * @param $slug
     * @return View
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, Request $request)
    {
        $song->fill($request->input())->save();

//        $song = $this->song->whereSlug($slug)->first();
//        $song->fill(['title' => $request->get('title')])->save();
//        $song->title = $reguest->get('title');
//        $song->save();

        return redirect('songs');
    }

}
