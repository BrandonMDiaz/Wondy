@extends('layouts.app')


@section('content')
  <h1 style="text-align:center;">Contacto</h1>
  <div class="container col-6" style="margin-top:5%;">
    <table class="table text-centered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Brandon</th>
          <td>3310415786</td>
          <td>brandonmanuel@live.com.mx</td>
        </tr>
        <tr>
          <th scope="row">Pedro</th>
          <td>3521251071</td>
          <td>pedro.enriquez2712@gmail.com</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
