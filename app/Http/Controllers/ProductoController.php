<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{

  //se usa un metodo o el otro
  //todo lo que si ahy que aceptar
  // protected $fillable = [];
  //todos lo que tiene que estar seguro, se asigna solo, por lo tanto no lo mandamos
  // protected $guarder = ['id','user_id'];

// ************* Subir diseños **************
// ******************************************

    public function index(){
      $productos = Producto::all();
      // dd($productos);
      // asi le mandamos los datos a la vista
      return view('productos.index', compact('productos'));
    }

    public function show(Request $request, $genero){
      // $product = Producto::find($idProducto);
      // $genero = strtolower($genero); //hacerlo minusculas
      if($genero == 'hombre'){
        // hacer busqueda en la base de datos
        // regresar busqueda a la vista
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
      // $producto = new Producto($request->all());
      // si necesitamos algo que no esté en nuestro formulario tenemos
      // que hacer un merge sobre el formulario
      // $request->merge([
      //   'recibido' => \Carbon\Carbon::now()->toDateString();
      // ]);
      // y se le agrega algo que no tenia y ya no te marcaria error
      $producto = new Producto;
      $request->validate([
        'nombre' => 'required|max:255',
        'tipo'
      ]);
      // dd($request->all()); // para debuguear
      Storage::disk('local')->put('file.txt', 'Contents');
      $product = new Producto();

      Documento::create($request->all());
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

    public function user(){
      return $this->belongsTo(User::class);
      // desde la vista se usa esto producto->user->name
      // producto->user->email
    }
}
