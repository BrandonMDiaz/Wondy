@extends('layouts.app')

@section('content')


  <div class="agregar-productos">
    <div class="container-productos">
      <div class="filtros-perfil">
        <div>
          <img class="perfil" src="{{URL::asset('/images/playera.jpg')}}" alt="foto de perfil">
          <h1 class="nombre-perfil">Crackbron</h1>

        </div>
        <label for="precio">Precio</label>
        <label for="tipo">tipo</label>
        <label for="talla">tipo</label>
        <label for="estrellas">estrellas</label>
        <label for="color">Color</label>
      </div>

      <div>
          {{-- @foreach ($producto as $prod)
          <div class="producto">
          <img class="img-1"src="{{URL::asset('/images/playera.jpg')}}" alt="Playera con diseño">
          <div class="playera-nombre">
          <p>{{$prod->descripcion}}</p>
        </div>
        <div class="precio-estrellas">
        <p>{{$prod->precio}}</p>
        <img src="" alt="">
      </div>
      <button class="add-cart-btn" type="button" name="button">
      <span>Add to cart<span>
      <img class="add-cart-img" src="{{URL::asset('/images/add.png')}}">
    </button>
  </div>
  @endforeach --}}
  <div class="ajustes-d">
    <a href="#">
      <img class="ajustes"src="{{URL::asset('/images/ajustes.png')}}" alt="ajustes">
    </a>
  </div>
    <div class="productos">
      @for ($i=0; $i < 10; $i++)
        <div class="producto">
          <img class="img-1"src="{{URL::asset('/images/playera.jpg')}}" alt="Playera con diseño">
          <div class="playera-nombre">
            <p>Playera con mangas negras</p>
          </div>
          <div class="precio-estrellas">
            <p>$150</p>
            <img src="" alt="">
          </div>
          <button class="add-cart-btn" type="button" name="button">
            <span>Add to cart<span>
              <img class="add-cart-img" src="{{URL::asset('/images/add.png')}}">
            </button>
          </div>
        @endfor
    </div>

      </div>
  </div>
</div>
@endsection
