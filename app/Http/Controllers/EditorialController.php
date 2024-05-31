<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editorial.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
//validación de campos requeridos
$this->validate($request, [
   'nombre' => 'required|min:5',
   'domicilio' => 'required',
   'correo' => 'required'
]);


$editorial = new Editorial();
$editorial->nombre = $request->input('nombre');
$editorial->domicilio = $request->input('domicilio');
$editorial->correo = $request->input('correo');
$editorial->estatus = 1;
$editorial->save();
return redirect()->route('editoriales.index')->with('message', 'La Editorial se ha guardado correctamente');

}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
   //Abre el formulario que permita editar un registro
   $editorial = Editorial::findOrFail($id);
   return view('editorial.edit', array(
       'editorial'=>$editorial
   ));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
   //Guarda la información del formulario de edición
   $this->validate($request, [
       'nombre' => 'required|min:5',
       'domicilio' => 'required',
       'correo' => 'required'
   ]);
   $editorial = Editorial::findOrFail($id);
   $editorial->nombre =  $request->input('nombre');
   $editorial->domicilio = $request->input('domicilio');
   $editorial->correo = $request->input('correo');
   $editorial->save();
   return redirect()->route('editoriales.index')->with(array(
       'message' => 'La editorial se ha actualizado correctamente'
   ));
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}