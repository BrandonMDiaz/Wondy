@extends('layouts.app')

@section('content')

  <div class="container">
    <form class="agregar-productos" action="" method="post">
      <div class="row">

          <div class="col-sm">
            <input type="file" name="file" id="file" class="inputfile" />
            <label for="file">Choose a file</label>
          </div>

          <div class="col-sm">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" placeholder= "nombre del producto">

              <label for="tipo">tipo de diseño</label>
                <select class="tipo" name="tipo">
                  <option value="1">Manga Larga</option>
                  <option value="2">Manga corta</option>
                  <option value="3">Manga normal</option>
                  <option value="4">Sueter</option>
                </select>
                <label for="precio">Precio</label>
                <input type="number" min="1" step="any" />
                <label for="color">id usuario</label>
                <input type="text" name="" value="">
            </div>

        </div>
    </form>
  </div>

@endsection
