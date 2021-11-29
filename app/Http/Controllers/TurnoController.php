<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class turnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos=Turno::paginate();
        return view('turno.index',compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turnos = new Turno();
        return view('turno.create',compact('turnos'));
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

            'Horario'=>'required',
            'Descripción'=>'required',
            ]);

            $turnos = new Turno();
            $turnos->Horario = $request->input('Horario');
            $turnos->Descripción = $request->input('Descripción');
            $turnos->save();
            $turnos = Turno::all();
        return view('turno.index', compact('turnos'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnos=Turno::find($id);
        $turnos_id=Turno::all();
        return view('turno.show' , compact('turnos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turnos=Turno::find($id);
        $turnos_id=Turno::all();
        return view('turno.edit' , compact('turnos'));

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
        $turnos = Turno::find($id);

        $validatedData = $request->validate([

            'Horario'=>'required',
            'Descripción'=>'required',
            ]);

            $turnos = new Turno();
            $turnos->Horario = $request->input('Horario');
            $turnos->Descripción = $request->input('Descripción');
            $turnos->update();
            $turnos = Turno::all();
        return view('turno.index', compact('turnos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turnos=Turno::findOrFail($id);
        $turnos->delete();
        return redirect()->route('turno.index');
    }
}
