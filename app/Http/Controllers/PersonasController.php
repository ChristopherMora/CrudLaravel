<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        $datos = Personas::all();
        return view('welcome', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agragado con exito!");
    }

    public function show($id)
    {
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));
    }

    public function edit($id)
    {
        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));
    }

    public function update(Request $request, $id)
    {
        $personas = personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        $personas = personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
