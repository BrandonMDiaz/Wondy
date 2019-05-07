<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    //Recibe múltiples archivos y guarda cada uno.
  foreach ($request->archivos as $archivo) {
      //Valida que se haya cargado el archivo correctamente
      if ($archivo->isValid()) {
          //Guarda el archivo en storage/app/
          $hashedName = $archivo->store('');
          //Guarda registro en tabla archivos
          $regArchivo = Archivo::create([
              'modelo_id' => $request->modelo_id,
              'modelo_type' => 'App\\' . $request->modelo_type, //guarda el modelo o instancia de la que esta guardando el archivo
              'nombre' => $archivo->getClientOriginalName(),
              'hashed' => $hashedName,
              'mime' => $archivo->getClientMimeType(),
              'size' => $archivo->getClientSize(),
          ]);
          $regArchivo->save();
      }
  }
  return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
      $headers = ['Content-Type: ' . $archivo->mime];
      return Storage::download($archivo->hashed, $archivo->nombre, $headers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
      Storage::delete($archivo->hashed);
      $archivo->delete();
      return redirect()->back();
    }
}
