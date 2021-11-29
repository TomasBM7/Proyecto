<?php

namespace App\Http\Controllers;

use App\Models\Despensa;
use Illuminate\Http\Request;

class despensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despensas=Despensa::paginate();
        return view('despensa.index',compact('despensas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $despensas = new Despensa();
        return view('despensa.create',compact('despensas'));
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

            'Tipo'=>'required',
            'Descripción'=>'required',
            ]);

            $despensas = new Despensa();
            $despensas->Tipo = $request->input('Tipo');
            $despensas->Descripción = $request->input('Descripción');
            $despensas->save();
            $despensas = Despensa::all();
        return view('despensa.index', compact('despensas'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despensas=Despensa::find($id);
        $despensas_id=Despensa::all();
        return view('despensa.show' , compact('despensas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despensas=Despensa::find($id);
        $despensas_id=Despensa::all();
        return view('despensa.edit' , compact('despensas'));

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
        $despensas = Despensa::find($id);

        $validatedData = $request->validate([

            'Tipo'=>'required',
            'Descripción'=>'required',
            ]);

            $despensas = new Despensa();
            $despensas->Tipo = $request->input('Tipo');
            $despensas->Descripción = $request->input('Descripción');
            $despensas->update();
            $despensas = Despensa::all();
        return view('despensa.index', compact('despensas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despensas=Despensa::findOrFail($id);
        $despensas->delete();
        return redirect()->route('despensa.index');
    }
}
