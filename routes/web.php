<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',);

Route::get('/info/{nombre}', function(){
    return view('paginas.contacto');
});

// si se pone una variable con signo de interrogacion significa que peude  o no recibir algo
// si se usa el signo, en function se tiene que poner que es igual a null.
Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido = null){
    // return $nombre . ' ' . $apellido;
    //esta es una manera de enviar variables a la funcion.
    // return view('paginas.bienvenida')->with([
    //   'nombre' => $nombre,
    //   'apellido' => $apellido
    //   ]);
    // esta es otra manera
    // return view('paginas.bienvenida' compact('nombre', 'apellido'));
    return view('paginas.bienvenida', compact('nombre', 'apellido'))
    ->with([
      'nombre_completo' => $nombre . ' ' . $apellido ]);

});

Route::get('/contacto', function(){
    return view('paginas.contacto');
});

Route::get('/equipo', function(){
  return view('paginas.equipo');

});

Auth::routes();
// se observa que manda a llamar la clase del controlador, arroba y despues el metodo
// ctrl + p para buscar un archivo
// aqui se le pone name para que agarre ese nombre, como un pseudonimo-
Route::get('/home', 'HomeController@index')->name('home');
