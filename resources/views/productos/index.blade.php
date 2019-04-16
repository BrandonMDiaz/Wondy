@extends('layouts.app')

@section('content')


    <form class="agregar-productos" action="" method="post">
      <div class="container-productos">
          <div class="filtros">
            <div class="tipo-filtro">
              <label for="">Tipo:</label>
              <ul>
                <li>
                  <a href="#">Playera normal</a>
                </li>
                <li>
                  <a href="#">Playera sin manga</a>
                </li>
                <li>
                  <a href="#">Playera manga larga</a>
                </li>
                <li>
                  <a href="#">Sueter</a>
                </li>
                <li>
                  <a href="#">Sudadera</a>
                </li>
              </ul>
            </div>
            <div class="precio-filtro">
              <form class="" action="index.html" method="post" id="precio">
                <label for="">Precio:</label>
                <br>
                <span class="inside-input">$</span>
                <input id="min" type="text" name="Min" placeholder="Min">
                <span class="inside-input">$</span>
                <input id="max" type="text" name="Max" placeholder="Max">
              </form>
              <button id="submit-precio" type="submit" form="precio" value="Submit">Ir</button>
            </div>
            <div class="estrella-filtro">
              <label for="">Estrellas:</label>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            {{-- <div class="color-filtro">

            </div> --}}
          </div>
          <div>
          <div class="filtro-container">
            <div class="filtro">
              <label for="text"> Ordenar por: </label>
              <select>
                <option value="Agregado reciente">Agregado reciente</option>
                <option value="Mas comprado">Mas comprado</option>
                <option value="Precio de bajo a alto">Precio de bajo a alto</option>
                <option value="Precio de alto a bajo">Precio de alto a bajo</option>
              </select>
            </div>
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

      </div>
    </form>
@endsection
