@extends('plantilla.plantilla')
@section('content')

@auth
<div class="form-header">
  <h2 class="form-title">C<span>arrito</span> </h2>
</div>

@foreach($products as $product)

  <div class="contenedor">
    <form class="formulariogrande" action="/carrito/eliminarCarrito" method="post" enctype="multipart/form-data">
     @csrf
     <div class="card mb-3" style="max-width: 540px;">
       <div class="row no-gutters">
         <div class="col-md-4">
           <img src="/storage/{{$product->imagen}}" class="card-img" alt="...">
         </div>
         <div class="col-md-4">
           <div class="card-body">
             <h5 class="card-title" >{{$product->name}}</h5>
             <p class="card-text"><a href="#">Ver detalle</a></p>
             <p class="card-text"><small class="text-muted">{{$product->price}}</small></p>

             <button type="submit" name="detalle_id" value="{{$product->id}}">sacar del carrito</button>

           </div>
         </div>
       </div>
     </div>
    </form>

  </div>

  @endforeach
@endauth
@endsection
