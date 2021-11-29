<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use Illuminate\Http\Request;

class multaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $multas=Multa::paginate();
        return view('multa.index',compact('multas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $multas = new Multa();
        return view('multa.create',compact('multas'));
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

            'nombre_multa'=>'required',
            'Descripción'=>'required',
            'precio'=>'required',
            ]);

            $multas = new Multa();
            $multas->nombre_multa = $request->input('nombre_multa');
            $multas->Descripción = $request->input('Descripción');
            $multas->precio = $request->input('precio');
            $multas->save();
            $multas = Multa::all();
        return view('multa.index', compact('multas'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $multas=Multa::find($id);
        $multas_id=Multa::all();
        return view('multa.show' , compact('multas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $multas=Multa::find($id);
        $multas_id=Multa::all();
        return view('multa.edit' , compact('multas'));

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
        $multas = Multa::find($id);

        $validatedData = $request->validate([

            'nombre_multa'=>'required',
            'Descripción'=>'required',
            'precio'=>'required',
            ]);

            $multas = new Multa();
            $multas->nombre_multa = $request->input('nombre_multa');
            $multas->Descripción = $request->input('Descripción');
            $multas->precio = $request->input('precio');
            $multas->update();
            $multas = Multa::all();
        return view('multa.index', compact('multas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $multas=Multa::findOrFail($id);
        $multas->delete();
        return redirect()->route('multa.index');
    }
}
