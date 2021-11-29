<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class estadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados=Estado::paginate();
        return view('estado.index',compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = new Estado();
        return view('estado.create',compact('estados'));
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

            'Descripción'=>'required',
            ]);

            $estados = new Estado();
            $estados->Descripción = $request->input('Descripción');
            $estados->save();
            $estados = Estado::all();
        return view('estado.index', compact('estados'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estados=Estado::find($id);
        $estados_id=Estado::all();
        return view('estado.show' , compact('estados'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estados=Estado::find($id);
        $estados_id=Estado::all();
        return view('estado.edit' , compact('estados'));

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
        $estados = Estado::find($id);

        $validatedData = $request->validate([

            'Descripción'=>'required',
            ]);

            $estados = new Estado();
            $estados->Descripción = $request->input('Descripción');
            $estados->update();
            $estados = Estado::all();
        return view('estado.index', compact('estados'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estados=Estado::findOrFail($id);
        $estados->delete();
        return redirect()->route('estado.index');
    }
}
