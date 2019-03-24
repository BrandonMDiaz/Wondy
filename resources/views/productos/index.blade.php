@extends('layouts.app')

@section('content')


    <form class="agregar-productos" action="" method="post">
      <div class="container-productos">
          <div class="filtros">
            <label for="">Precio</label>
            <label for="">tipo</label>
            <label for="">estrellas</label>
            <label for="">Color</label>
          </div>

            <div class="productos">
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
    </form>
@endsection
