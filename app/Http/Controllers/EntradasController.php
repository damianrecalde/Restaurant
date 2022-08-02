<?php

namespace App\Http\Controllers;
use App\Models\entrada;
use Illuminate\Http\Request;

class EntradasController extends Controller
{

    /**
     * Mostrando la lista de entradas
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['entradas'] = Entrada::orderBy('id', 'desc')->paginate(5);
        return view('entradas.index', $data);
    }

    /**
     * Mostrando el formulario para crear
     * @return \Illuminte\Http\Response
     */
    public function create()
    {
        return view('entradas.create');
    }

    /**
     * Stroe a new created started in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'name' => 'required',
            'descripcion' => 'required',
            'description' => 'required',
            'precio' => 'required'
        ]);
        $entrada = new Entrada;
        $entrada->nombre = $request->nombre;
        $entrada->name = $request->name;
        $entrada->descripcion = $request->descripcion;
        $entrada->description = $request->description;
        $entrada->precio = $request->precio;
        $entrada->save();
        return redirect()->route('entradas.index')->with('success', 'La entrada fue actualizada correctamente');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\entrada  $entrada
    * @return \Illuminate\Http\Response
    */
    public function show(Entrada $entrada)
    {
    return view('entradas.show',compact('entrada'));
    } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Entrada  $entrada
    * @return \Illuminate\Http\Response
    */
    public function edit(Entrada $entrada)
    {
    return view('entradas.edit',compact('entrada'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\entrada  $entrada
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'nombre' => 'required',
    'name' => 'required',
    'descripcion' => 'required',
    'description' => 'required',
    'precio' => 'required',
    ]);
    $entrada = Entrada::find($id);
    $entrada->nombre = $request->nombre;
    $entrada->name = $request->name;
    $entrada->descripcion = $request->descripcion;
    $entrada->description = $request->description;
    $entrada->precio = $request->precio;
    $entrada->save();
    return redirect()->route('entradas.index')
    ->with('success','Las entradas fueron actulizadas con éxito');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Entrada  $entrada
    * @return \Illuminate\Http\Response
    */
    public function destroy(Entrada $entrada)
    {
    $entrada->delete();
    return redirect()->route('entradas.index')
    ->with('success','Company has been deleted successfully');
    }
}
