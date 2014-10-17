<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSongRequest;
use App\Song;

class SongsController extends Controller {

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * Display a listing of the songs.
     *
     * @return View
     */
    public function index()
    {
        $songs = $this->song->get();

        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new song.
     *
     * @return View
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created song in storage.
     *
     * @param  CreateSongRequest $request
     * @param  Song $song
     * @return Redirector
     */
    public function store(CreateSongRequest $request, Song $song)
    {
        $song->create($request->all());

        return redirect()->route('songs.index');
    }

    /**
     * Display the specified song.
     *
     * @param  Song $song
     * @return View
     */
    public function show(Song $song)
    {
        //$song = $this->song->whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified song.
     *
     * @param  Song $song
     * @return View
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Song $song
     * @param  Request $request
     * @return Redirector
     */
    public function update(Song $song, Request $request)
    {
        $song->fill($request->input())->save();

        //$song = $this->song->whereSlug($slug)->first();
        //$song->fill(['title' => $request->get('title')])->save();
        //$song->title = $reguest->get('title');
        //$song->save();

        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified song from storage.
     *
     * @param  Song $song
     * @return Response
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index');
    }

}