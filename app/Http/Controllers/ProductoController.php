<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{

  //se usa un metodo o el otro
  //todo lo que si hay que aceptar
  // protected $fillable = [];
  //todos lo que tiene que estar seguro, se asigna solo, por lo tanto no lo mandamos
  // protected $guarder = ['id','user_id'];

// ************* Subir diseños **************
// ******************************************

    public function index(){
      // $productos =App\Producto->paginate(23);
      $productos = Producto::all(); //pedimos todos los productos
      // dd($productos);
      // asi le mandamos los datos a la vista
      return view('productos.index', compact('productos'));
    }

    public function show(Request $request){
      return view('productos.producto');
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

      $producto = $request->input('');
      $producto = $request->input('');

      Storage::disk('local')->put('file.txt', 'Contents');
      Documento::create($request->all());

      $producto->save();
    }

    public function edit(){
      return view('productos.editar');
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

      if($genero == 'hombre'){
        $productos = $Producto::whereRaw('tipo = 1 and genero = 1')->get();
        return view('productos.index', compact($productos));
      }
      else if($genero == 'mujer'){
        $productos = $Producto::whereRaw('tipo = 2 and genero = 2')->get();
        return view('productos.index', compact($productos));
      }
      else if($genero == 'ninio') {
        $productos = $Producto::whereRaw('tipo = 3 and genero = 3')->get();
        return view('productos.index', compact($productos));
      }
      else {
        return view('productos.index');
      }
    }

    public function perfil($usuario){
      return view('perfil.index');
    }

    public function productoGenero($genero) {
      if($genero == 'hombre'){
        $productos = $Producto::where('tipo', 1);
        return view('productos.index', compact($productos));
      }
      else if($genero == 'mujer'){
        $productos = $Producto::where('tipo', 2);
        return view('productos.index', compact($productos));
      }
      else if($genero == 'ninio') {
        $productos = $Producto::where('tipo', 3);
        return view('productos.index', compact($productos));
      }
      else {
        return view('productos.index');
      }
    }

    public function user(){
      return $this->belongsTo(User::class);
      // desde la vista se usa esto producto->user->name
      // producto->user->email
    }
}
