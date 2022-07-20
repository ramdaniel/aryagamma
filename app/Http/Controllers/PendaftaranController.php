<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Http\Requests\StorePendaftaranRequest;
use App\Http\Requests\UpdatePendaftaranRequest;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pendaftaran.index', [
            'pendaftarans'=> Pendaftaran::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendaftaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendaftaranRequest $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'tempat_tanggal'=> 'required',
            'jenis_kelamin'=> 'required',
            'no_hp'=> 'required',
            'alamat' => 'required',
            'nama_ortu'=> 'required',
            'pekerjaan_ortu' => 'required',
            'no_ortu' => 'required',
            'program' => 'required',
            'foto' => 'image'
        ]);
        if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('foto-pendaftar');
        }
        Pendaftaran::create($validatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        return view('dashboard.pendaftaran.show', [
            'pendaftaran' => $pendaftaran
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendaftaranRequest  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendaftaranRequest $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
