<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Pedido;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=Proveedor::paginate();
        return view('proveedor.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
        $producto_id=Proveedor::all();
        return view('proveedor.create',compact('producto_id'));
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
        'producto_id'=>'required',
        'cargos_id'=>'required'
        ]);

        $proveedores = new proveedor();
        $proveedores->nombres = $request->input('nombres');
        $proveedores->apellidos = $request->input('apellidos');
        $proveedores->ci = $request->input('ci');
        $proveedores->telefono = $request->input('telefono');
        $proveedores->email = $request->input('email');
        $proveedores->direccion = $request->input('direccion');
        $proveedores->producto_id = $request->input('producto_id');
        $proveedores->cargos_id = $request->input('cargos_id');
        $proveedores->save();

        $proveedores = proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedores = proveedor::find($id);
        $producto_id=Proveedor::all();
        return view('proveedor.show' , compact('proveedores','producto_id','cargos_id'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = proveedor::find($id);
        $producto_id=Proveedor::all();
        return view('proveedor.edit' , compact('proveedores','producto_id','cargos_id'));
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
        $proveedores = proveedor::find($id);

        $validatedData = $request->validate([

            'nombres'=>'required',
            'apellidos'=>'required',
            'ci'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'direccion'=>'required',
            'producto_id'=>'required',
            'cargos_id'=>'required'
            ]);
    
            $proveedores->nombres = $request->input('nombres');
            $proveedores->apellidos = $request->input('apellidos');
            $proveedores->ci = $request->input('ci');
            $proveedores->telefono = $request->input('telefono');
            $proveedores->email = $request->input('email');
            $proveedores->direccion = $request->input('direccion');
            $proveedores->producto_id = $request->input('producto_id');
            $proveedores->cargos_id = $request->input('cargos_id');
            $proveedores->update();
    
            $proveedores = proveedor::all();
            return view('proveedor.index', compact('proveedores'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores=proveedor::findOrFail($id);
        $proveedores->delete();
        return redirect()->route('proveedor.index');
    }
}
