<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Http\Requests\StoreTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use Illuminate\Support\Facades\Storage;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.testimoni.index', [
            'testimonis'=> Testimoni::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimoniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimoniRequest $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|required',
            'nama' => 'required',
            'komentar' => 'required'
        ]);
        if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('foto-testimoni');
        }
        Testimoni::create($validatedData);
        return redirect('/dashboard/testimoni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        return view('dashboard.testimoni.edit', [
            'testimonis'=> Testimoni::all(),
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimoniRequest  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimoniRequest $request, Testimoni $testimoni)
    {
        $rules =[
            'nama' => 'required',
            'komentar' => 'required',
            'foto' => 'image'
        ];
        $validatedData = $request->validate($rules);
        if($request->file('foto')){
        if($request->oldImage){
            Storage::delete($request->oldImage);
            }
            $validatedData['foto']=$request->file('foto')->store('foto-testimoni');
        }
            
        
        
            Testimoni::where('id', $testimoni->id)->update($validatedData);
        return redirect('/dashboard/testimoni/1/edit')->with('succes', 'Data Home Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        if($testimoni->foto){
            Storage::delete($testimoni->foto);
        }

Testimoni::destroy($testimoni->id);
return redirect('/dashboard/testimoni')->with('succes','testimoni telah dihapus');
    }
    
}
