<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coba = Song::all();
        return view('index', compact('coba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pembuat' => 'required',
            'tanggal_rilis' => 'required',
            'link' => 'required',
        ]);

        Song::create([
            'judul' => $request->judul,
            'pembuat' => $request->pembuat,
            'tanggal_rilis' => $request->tanggal_rilis,
            'link' => $request->link
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $id)
    {
        return view('detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $id)
    {
        return view('edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $id)
    {
        $request->validate([
            'judul' => 'required',
            'pembuat' => 'required',
            'tanggal_rilis' => 'required',
            'link' => 'required',
        ]);

        Song::where('id', $id->id)
            ->update([
                'judul' => $request->judul,
                'pembuat' => $request->pembuat,
                'tanggal_rilis' => $request->tanggal_rilis,
                'link' => $request->link
            ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $id)
    {
        Song::destroy($id->id);
        return redirect('/');
    }
}
