<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos=Cargo::paginate();
        return view('cargo.index',compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = new Cargo();
        return view('cargo.create',compact('cargos'));
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

            'nombre_cargo'=>'required',
            'sueldo_base'=>'required',
            ]);

            $cargos = new Cargo();
            $cargos->nombre_cargo = $request->input('nombre_cargo');
            $cargos->sueldo_base = $request->input('sueldo_base');
            $cargos->save();
            $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargos=Cargo::find($id);
        $cargos_id=Cargo::all();
        return view('cargo.show' , compact('cargos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargos=Cargo::find($id);
        $cargos_id=Cargo::all();
        return view('cargo.edit' , compact('cargos'));

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
        $cargos = Cargo::find($id);

        $validatedData = $request->validate([

            'nombre_cargo'=>'required',
            'sueldo_base'=>'required',
            ]);

            $cargos = new Cargo();
            $cargos->nombre_cargo = $request->input('nombre_cargo');
            $cargos->sueldo_base = $request->input('sueldo_base');
            $cargos->update();
            $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargos=Cargo::findOrFail($id);
        $cargos->delete();
        return redirect()->route('cargo.index');
    }
}
