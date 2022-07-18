<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Http\Requests\StoreartikelRequest;
use App\Http\Requests\UpdateartikelRequest;
use Illuminate\Support\Facades\Storage;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'artikels'=> Artikel::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreartikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreartikelRequest $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|required'
        ]);
        if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('foto-artikel');
        }
        Artikel::create($validatedData);
        return redirect('/dashboard/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateartikelRequest  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateartikelRequest $request, artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        if($artikel->foto){
            Storage::delete($artikel->foto);
        }

Artikel::destroy($artikel->id);
return redirect('/dashboard/artikel')->with('succes','Artikel telah dihapus');
    }
    
}
