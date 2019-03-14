<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

// ************* Subir diseños **************
// ******************************************

    public function index(){
      // $productos = Producto::all();
      // asi le mandamos los datos a la vista
      return view('productos.index', compact('productos'));
    }

    public function show(Request $request, $genero){
      $genero = strtolower($genero); //hacerlo minusculas
      if($genero == 'hombre')
        //hacer busqueda en la base de datos
        //regresar busqueda a la vista
        return view('productos.index', compact($genero));
      }
      else if($genero == 'mujer'){

      }
      else if($genero == 'ninio') {

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
      $product = new Producto();
    }

    public function edit(){

    }

    public function update(Request $request, Producto $producto){

    }

    public function destroy(){

    }

    public function productosTipo($genero, $tipo){
      $gener = $genero. " " . $tipo;
      return $gener;
    }

}
