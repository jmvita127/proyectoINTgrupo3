@extends('plantilla.plantilla')
@section('content')
<div class="form-header">
  <h2 class="form-title">D<span>etalle</span> P<span>roducto</span> </h2>
</div>
<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
   @csrf
   <div class="col-12 col-md-6 col-lg-12">
   <div class="card text-white bg-dark mb-3"
   style="
     text-align: center;
     max-width: 50rem;
     margin: auto;
     padding-left: 0px;
     padding-top: 10px;
     ">
     <a name="quienes">
     <div class="card-body">
       <img src="/storage/{{$product->imagen}}" class="card-img-top" alt="...">
       <h5 class="card-title" style="font-family: 'Orbitron', sans-serif;
       font-weight: bold;">{{old('name', $product->name)}}</h5>
       <p class="card-text">{{old('description', $product->description)}}</p>
       <p class="card-text">${{old('price', $product->price)}}</p>
       @guest
       <a class="nav-link" href="/register" style="color:orange;">REGISTRATE PARA COMPRAR!<span class="sr-only">(current)</span></a>
       @endguest

       @auth
       <form class="" action="/carrito" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type="submit" class="btn btn-success"><img class="carrito" src="/imagenes/carrito.png" alt="" witdh="30" height="30"></a>
        </form>
        @endauth
     </div>

     </div>
   </div>
 </div>
 </form>
@endsection
