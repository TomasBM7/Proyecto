<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Estado; 
use App\Models\Despensa;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $clientes=Cliente::paginate();
        return view('client.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados_id=Estado::all();
        $despensas_id=Despensa::all();
        return view('client.create', compact('estados_id','despensas_id'));
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
            'codigo_departamento'=>'required',
            'mascotas'=>'required',
            'niños'=>'required',
            'estados_id'=>'required',
            'despensas_id'=>'required'
        ]);

        $clientes = new Cliente();
        $clientes->nombres = $request->input('nombres');
        $clientes->apellidos = $request->input('apellidos');
        $clientes->ci = $request->input('ci');
        $clientes->telefono = $request->input('telefono');
        $clientes->email = $request->input('email');
        $clientes->codigo_departamento = $request->input('codigo_departamento');
        $clientes->mascotas = $request->input('mascotas');
        $clientes->niños = $request->input('niños');
        $clientes->estados_id = $request->input('estados_id');
        $clientes->despensas_id = $request->input('despensas_id');
        $clientes->save();

        $clientes = Cliente::all();
        return view('client.index', compact('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Cliente::find($id);
        $estados_id=Estado::all();
        $despensas_id=Despensa::all();

        return view('client.show' , compact('clientes','estados_id','despensas_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);
        $estados_id=Estado::all();
        $despensas_id=Despensa::all();
        return view('client.edit' , compact('clientes','estados_id','despensas_id'));
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
        $clientes = Cliente::find($id);

        $validatedData = $request->validate([

            'nombres'=>'required',
            'apellidos'=>'required',
            'ci'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'codigo_departamento'=>'required',
            'mascotas'=>'required',
            'niños'=>'required',
            'estados_id'=>'required',
            'despensas_id'=>'required'
        ]);

        $clientes->nombres = $request->input('nombres');
        $clientes->apellidos = $request->input('apellidos');
        $clientes->ci = $request->input('ci');
        $clientes->telefono = $request->input('telefono');
        $clientes->email = $request->input('email');
        $clientes->codigo_departamento = $request->input('codigo_departamento');
        $clientes->mascotas = $request->input('mascotas');
        $clientes->niños = $request->input('niños');
        $clientes->estados_id = $request->input('estados_id');
        $clientes->despensas_id = $request->input('despensas_id');
        $clientes->update();

        $clientes = Cliente::all();
        return view('client.index', compact('clientes'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes=Cliente::findOrFail($id);
        $clientes->delete();
        return redirect()->route('client.index');
    }
}
