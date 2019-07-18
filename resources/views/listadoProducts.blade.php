@extends('plantilla.plantilla')
@section('content')
  <br>
  <br>
  <div class="form-header">
    <h2 class="form-title">P<span>roductos</span> E<span>lectronicos</span> </h2>
  </div>
  <br>
  @auth
    @if (Auth::user()->isAdmin)
      <a href="create" class="btn btn-success" style="margin-left: 55px">Crear Producto</a>
    @endif
  @endauth

  <br>
  <br>

  <!--
  <ul>
  @foreach ($products as $product)
  <li class="productos"> {{$product->name}} <br> </li>

  <img class="imagen-productos" src="/storage/{{$product->imagen}}" alt="">

  <form class="" action="/carrito/{id}" method="post">
  @csrf

  <input type="submit" name="" value="addToCart">

</form>

@endforeach

</ul> -->





<div class="row">
  @foreach ($products as $product)

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-white bg-dark mb-3"
      style="
      text-align: center;
      margin:auto;
      padding: auto;
      ">
      <a name="quienes">
        <img src="/storage/{{$product->imagen}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Orbitron', sans-serif;
          font-weight: bold;">{{$product->name}}</h5>
          {{-- <p class="card-text">{{$product->description}}</p> --}}
          <p class="card-text" style="font-size: 1.3em">Precio  ${{$product->price}}</p>
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
              <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger">Eliminar</a>
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

 <div class="" style="margin-left: 55px">
   {{$products->links()}}
 </div>

@endsection
