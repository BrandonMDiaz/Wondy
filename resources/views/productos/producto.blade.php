@extends('layouts.app')

@section('content')
  <div class="producto-grid">
    <div class="producto-ver">
      <div class="producto-vistas">
        @for ($i=0; $i < 4; $i++)
          <img class="img-vista"src="{{URL::asset('/images/playera.jpg')}}" alt="Playera con diseño">
        @endfor
      </div>
      <div class="wrapper-producto">
        <img class="img-2"src="{{URL::asset('/images/playera.jpg')}}" alt="Playera con diseño">
      </div>
    </div>
    <form class="especificaciones" action="index.html" method="post">
        <p>$190</p>
        <p>By Crackbron</p>
        <p>110 comentarios</p>
        <p>Color</p>
        <p>Talla</p>
    </form>
  </div>
@endsection
