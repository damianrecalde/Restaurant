<?php

namespace App\Http\Controllers;
use App\Models\principal;
use Illuminate\Http\Request;

class PrincipalesController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['principales'] = Principal::orderBy('id', 'desc')->paginate(5);
        return view('principales.index', $data);
    }

    /**
     * Mostrando el formulario para crear principales
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('principales.create');
    }

    /**
     * almacenar el nuvo principal creado
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
        $principal = new Principal;
        $principal->nombre = $request->nombre;
        $principal->name = $request->name;
        $principal->descripcion = $request->descripcion;
        $principal->description = $request->description;
        $principal->precio = $request->precio;
        $principal->save();
        return redirect()->route('principales.index')->with('success', 'El principal fue creado con éxito');
    }

    /**
     * Mostrando un principal específico
     * @param \App\principal $principal
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
        return view('principales.show', compact('principal'));
    }

    /**
     * Mostrando el formulario para editar el principal
     * @param \App\principal $principal
     * @return \Illuminate\Http\Response
     */
    public function edit(Principal $principal)
    {
        return view('principales.edit', compact('principal'));
    }

    /**
     * Haciendo el update del principal
     * @param \App\principal $principal
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
        $principal = new Principal;
        $principal->nombre = $request->nombre;
        $pricnipal->name = $request->name;
        $principal->descripcion = $request->descripcion;
        $principal->description = $request->description;
        $principal->precio = $request->precio;
        $principal->save();
        return redirect()->route('principales.index')->with('success', 'Los principales fueron actualizados con éxito');
    }

    /**
     * Eliominando un principal
     * @param \App\Principal $principal
     * @return \Illimunate\Http\Response
     */
    public function destroy(Principal $principal)
    {
        $principal->delete();
        return redirect()->route('principales.index')->with('success', 'El principal fué eliminado con éxito');
    }
}
