<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Bienvenida</title>
  </head>
  <body>
    <h1>Bienvenido</h1>
    <p>
      Hola {{ $nombre }} {{ $apellido }}
    </p>
    <p>
      Nombre completo: {{$nombre_completo}}
    </p>
  </body>
</html>
