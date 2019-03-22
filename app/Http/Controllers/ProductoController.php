<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{

// ************* Subir diseños **************
// ******************************************

    public function index(){
      $productos = Producto::all();
      // dd($productos);
      // asi le mandamos los datos a la vista
      return view('productos.index', compact('productos'));
    }

    public function show(Request $request, $genero){
      $product = Producto::find($idProducto);
      $genero = strtolower($genero); //hacerlo minusculas
      if($genero == 'hombre'){
        //hacer busqueda en la base de datos
        //regresar busqueda a la vista
        return view('productos.index', compact($genero));
      }
      else if($genero == 'mujer'){
        return 'mujer';
      }
      else if($genero == 'ninio') {
        return "nunio";
      }
      else {
        return view('productos.index');
      }
    }

    public function create(){
      return view('productos.agregar');
    }

    public function store(Request $request){
      // dd($request->all()); // para debuguear
      Storage::disk('local')->put('file.txt', 'Contents');
      $product = new Producto();
    }

    public function edit(){

    }

    public function update(Request $request, Producto $producto){
      $producto->save();
      return redirect()->route('producto.show', $producto->id);
    }

    public function destroy(Producto $producto){
      $producto->delete();
      //redireccioname hacia
      return redirect()->route('productos.index');
    }

    public function productosTipo($genero, $tipo){
      $gener = $genero. " " . $tipo;
      return $gener;
    }

}
