@extends('plantilla.plantilla')

@section('content')

<div class="container-fluid">
  <div id="carouselExampleControls" class="carouselimg carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/imagenes/gtx.jpg"  class="carouselimg d-100 w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/imagenes/game.jpg"  class="carouselimg d-100 w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/imagenes/gtps4.jpg"  class="carouselimg d-100 w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div  class="barra">
  <div class="row-barra">
    <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
      <a href="/cajaBlanca#cuotas" id="enlace"></a>
      <img class="creditcard" src="/imagenes/creditcard.png" alt="">
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
      <a href="/cajaBlanca#cuotas" id="enlace"></a>
      <p class="texto1">¡CUOTAS SIN INTERÉS!</p>
      <p class="texto2">En productos seleccionados</p>
    </div>

    <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
      <a href="/cajaBlanca#envio" id="enlace"></a>
      <img class="delivery" src="/imagenes/delivery.png" alt="">
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
      <a href="/cajaBlanca#envio" id="enlace"></a>
      <p class="texto1">ENVIOS A TODO EL PAIS</p>
      <p class="texto2">¡Rápido,sin vueltas!</p>
    </div>

    <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
      <a href="/cajaBlanca#retira" id="enlace"></a>
      <img class="location" src="/imagenes/location.png" alt="">
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
      <a href="/cajaBlanca#retira" id="enlace"></a>
      <p class="texto1">¡RETIRA GRATIS!</p>
      <p class="texto2">¿Donde estamos?</p>
    </div>

    <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
      <a href="/cajaBlanca#compra" id="enlace"></a>
      <img class="ok" src="/imagenes/ok.png" alt="">
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
      <a href="/cajabBlanca#compra"  id="enlace"></a>
      <p class="texto1">COMPRA 100% SEGURA</p>
      <p class="texto2">Garantias Oficiales</p>
    </div>
  </div>
</div>
</div>

<section class="caja1" style="margin: auto;">

  <article class="contenedor0">
    <h3>OFERTAS SEMANALES IMPERDIBLES!</h3>
  </article>
    <div class="row">
@foreach ($products as $product)

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card text-white bg-dark mb-3"
          style="
          text-align: center;
          margin:auto;
          padding:auto;
          ">
          <a name="quienes">
            <img src="/storage/{{$product->imagen}}" style="margin:auto" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-family: 'Orbitron', sans-serif;
              font-weight: bold;">{{$product->name}}</h5>
              {{-- <p class="card-text">{{$product->description}}</p> --}}
              <p class="card-text" style="font-size: 1.3em">Precio: ${{$product->price}}</p>
              <p class="card-text">
                <?php
              if (($product->stock)>0) {
                   ?>
                    <strong style="font-weight: bold; color: lightgreen; font-size: 1.3em">- EN STOCK - </strong>
                    <form class="" action="/carrito" method="post">
                      @csrf
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      @auth
                      <button onclick= "alert('{{$product->name}} FUE AGREGADO AL CARRITO EXITOSAMENTE')" type="submit" class="btn btn-success" style="margin-top:5px"><img class="carrito" src="/imagenes/carrito.png" alt="" witdh="30" height="30"></button>
                      @endauth
                      </form>
                    <?php
                } else {
                   ?>
                   <strong style="font-weight: bold; color: red; font-size: 1.3em">- SIN STOCK - </strong>
                   <?php
                  }
                 ?></p>
              @auth
                @if (Auth::user()->isAdmin)
                  <a href="/product/edit/{{$product->id}}" class="btn btn-primary">Editar Producto</a>
                  <a href="/deleteProduct/{{$product->id}}" style="margin-top:4px;" class="btn btn-danger">Eliminar</a>
                @endif


                @endauth
                @guest
                  <a class="nav-link" href="register" style="color:orange;">REGISTRATE PARA COMPRAR!<span class="sr-only">(current)</span></a>
                @endguest
              </div>
              <a href="/product/detalleProductos/{{$product->id}}" class="btn btn-info" style="
              text-align: center;">VER DETALLE</a>
            </div>
            </div>


        @endforeach
     </div>
<!--
     <div class=""style="margin-left: 55px">
       {{$products->links()}}
     </div> -->
<br>
</section>



    <!-- <img class="imagen1" src="/imagenes/promo1.jpg" alt="">
     <a href="" id="enlace"></a>
    <p class="texto3">Mouse Gamer Stone X9 / Para Juegos </p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt="">$499,99</p>

  </article>

  <article class="contenedor2" id="relativo">
    <img class="imagen2" src="/imagenes/promo2.jpg" alt="">
    <a href="" id="enlace"></a>
    <p class="texto3">Motherboard Msi S1151 B360m Bazooka Box</p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt="">$2499</p>

  </article>

  <article class="contenedor3" id="relativo">
    <img class="imagen3" src="/imagenes/promo3.jpg" alt="">
    <a href="" id="enlace"></a>
    <p class="texto3">SSD 250 WD</p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt="">$1590</p>

  </article>

  <article class="contenedor4" id="relativo">

    <img class="imagen4" src="/imagenes/promo4.jpg" alt="">
    <a href="" id="enlace"></a>
    <p class="texto3">Gabinete Gamer Redragon Sideswipe Gc-601 Rgb Vidrio Templado</p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt="">$499,99</p>

  </article>

  <article class="contenedor5" id="relativo">
    <img class="imagen5" src="/imagenes/promo5.jpg" alt="">
    <a href="" id="enlace"></a>
    <p class="texto3">Fuente Pc Evga Gq 850w 80plus Gold Modular Silent</p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt="">$2499</p>

  </article>

  <article class="contenedor6" id="relativo">
    <img class="imagen6" src="/imagenes/promo6.jpg" alt="">
    <a href="" id="enlace"></a>
    <p class="texto3">Placa De Video Asus Phoenix Geforce Gtx 1050 2gb</p>
    <p class="texto4"><img class="carrito2" src="/imagenes/carrito.png" alt=""> $7590</p>

  </article>



</section> -->

@endsection
