<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Inertia\Inertia;


use Illuminate\Http\Request;

class ArtikelController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return Inertia:: render('LandingPage', compact('artikels'));

    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Artikel/Tambah');

    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Validation
       $request->validate([
        'judul' => 'required|string',
        'deskripsi' => 'required|string',
        'image' => 'image|mimes:svg,jpeg,png,jpg,gif|max:5000', // Example validation rule for image uploads
    ]);
    $artikels = new Artikel([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
    ]);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('artikel_images', 'public');
        $artikels->image = $imagePath;
    }
    $artikels->save();
    return redirect()->route('artikels.index')->with('success', 'Paket created successfully.');
    }

       /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }


}
