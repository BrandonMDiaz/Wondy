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
//
// Route::get('/info/{nombre}', function(){
//     return view('paginas.contacto');
// });

// si se pone una variable con signo de interrogacion significa que peude  o no recibir algo
// si se usa el signo, en function se tiene que poner que es igual a null.
// Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido = null){
//     // return $nombre . ' ' . $apellido;
//     //esta es una manera de enviar variables a la funcion.
//     // return view('paginas.bienvenida')->with([
//     //   'nombre' => $nombre,
//     //   'apellido' => $apellido
//     //   ]);
//     // esta es otra manera
//     // return view('paginas.bienvenida' compact('nombre', 'apellido'));
//     return view('paginas.bienvenida', compact('nombre', 'apellido'))
//     ->with([
//       'nombre_completo' => $nombre . ' ' . $apellido ]);
//
// });

// Route::get('/contacto', function(){
//     return view('paginas.contacto');
// });
//
// Route::get('/equipo', function(){
//   return view('paginas.equipo');
//
// });

// ************************************************* //
// **************** Productos ********************** //
// ************************************************* //

//nombre que le pone a ese recuerso es 'productos' y asi tambien se va a llamar
//en la url,,, el segundo argumento te dice el controlador que te hace.
Route::resource('productos', 'ProductoController');

// Podriamos hacer que mandemos un {hombre} o {mujer} y solamente completamos
// la pagina con los datos de cada uno <--- preguntale al profesor.
// aun no deciso si dejarlo como nuevo o no
Route::get('productos/{genero}', 'ProductoController@productoGenero')->name('productoGenero');
Route::get('productos/{genero}/{id_tipo}', 'ProductoController@productosTipo')->name('productoTipo');
//subdiviciones genero = {hombre, mujer, niño, niña}
// subdiviciones tipo = {chamarra, manga larga, manga corta, sueter, manga normal}


//crear diseño
// Route::get('/producto', 'ProductoController@index' )->name('agregarDiseño');
// Route::post('/diseño', 'ProductoController@agregar')->name('agregarProducto');


Auth::routes();
// se observa que manda a llamar la clase del controlador, arroba y despues el metodo
// ctrl + p para buscar un archivo
// aqui se le pone name para que agarre ese nombre, como un pseudonimo-
Route::get('/home', 'HomeController@index')->name('home');
