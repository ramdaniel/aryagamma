<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use Illuminate\Support\Facades\Storage;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.program.index', [
            'programs'=> Program::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramRequest $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('foto-program');
        }
        Program::create($validatedData);
        return redirect('/dashboard/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('dashboard.program.edit', [
            'programs'=> Program::all(),
            'program' => $program
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramRequest  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        $rules =[
            'judul' => 'required',
            'komentar' => 'required',
            'foto' => 'image'
        ];
        $validatedData = $request->validate($rules);
        if($request->file('foto')){
        if($request->oldImage){
            Storage::delete($request->oldImage);
            }
            $validatedData['foto']=$request->file('foto')->store('foto-program');
        }
        Program::where('id', $program->id)->update($validatedData);
        return redirect('/dashboard/program/1/edit')->with('succes', 'Data Program Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        if($program->foto){
            Storage::delete($program->foto);
        }

Program::destroy($program->id);
return redirect('/dashboard/program')->with('succes','program telah dihapus');
    }
}
