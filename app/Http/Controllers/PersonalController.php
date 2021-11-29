<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Personal;
use App\Models\Turno;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals=Personal::paginate();
        return view('personal.index',compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
        $turnos_id=Turno::all();
        $cargos_id=Cargo::all();
        return view('personal.create',compact('turnos_id','cargos_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

        'nombres'=>'required',
        'apellidos'=>'required',
        'ci'=>'required',
        'telefono'=>'required',
        'email'=>'required',
        'direccion'=>'required',
        'turnos_id'=>'required',
        'cargos_id'=>'required'
        ]);

        $personals = new Personal();
        $personals->nombres = $request->input('nombres');
        $personals->apellidos = $request->input('apellidos');
        $personals->ci = $request->input('ci');
        $personals->telefono = $request->input('telefono');
        $personals->email = $request->input('email');
        $personals->direccion = $request->input('direccion');
        $personals->turnos_id = $request->input('turnos_id');
        $personals->cargos_id = $request->input('cargos_id');
        $personals->save();

        $personals = Personal::all();
        return view('personal.index', compact('personals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personals = Personal::find($id);
        $turnos_id=Turno::all();
        $cargos_id=Cargo::all();

        return view('personal.show' , compact('personals','turnos_id','cargos_id'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personals = Personal::find($id);
        $turnos_id=Turno::all();
        $cargos_id=Cargo::all();

        return view('personal.edit' , compact('personals','turnos_id','cargos_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personals = Personal::find($id);

        $validatedData = $request->validate([

            'nombres'=>'required',
            'apellidos'=>'required',
            'ci'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'direccion'=>'required',
            'turnos_id'=>'required',
            'cargos_id'=>'required'
            ]);
    
            $personals->nombres = $request->input('nombres');
            $personals->apellidos = $request->input('apellidos');
            $personals->ci = $request->input('ci');
            $personals->telefono = $request->input('telefono');
            $personals->email = $request->input('email');
            $personals->direccion = $request->input('direccion');
            $personals->turnos_id = $request->input('turnos_id');
            $personals->cargos_id = $request->input('cargos_id');
            $personals->update();
    
            $personals = Personal::all();
            return view('personal.index', compact('personals'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personals=Personal::findOrFail($id);
        $personals->delete();
        return redirect()->route('personal.index');
    }
}
