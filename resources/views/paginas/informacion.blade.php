@extends('layouts.app')
@section('contenido')
</section>
    <h1>Bienvenido</h1>
    <p>
      Hola {{ $nombre }} {{ $apellido }}
    </p>
    <p>
      Nombre completo: {{$nombre_completo}}
    </p>
@endsection
