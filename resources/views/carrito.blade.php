@extends('plantilla.plantilla')
@section('content')
 <div class="form-header">
   <h2 class="form-title">C<span>arrito</span> </h2>
 </div>


 @foreach($products as $product)

   <div class="contenedor">
     <form class="formulariogrande" action="/carrito/eliminarCarrito" method="post" enctype="multipart/form-data">
       @csrf

       <div class="media block-update-card">
         <a class="pull-left" href="#">
           <img class="media-object update-card-MDimentions" src="/storage/{{$product->imagen}}" style="width:300px;"alt="...">
         </a>
         <div class="media-body update-card-body" style="text-align:center;line-height:100px;">

           <h4 class="media-heading" style="font-size:2em;color:darkorange;">{{$product->name}}</h4>

           <p class="card-text" style="font-size:1em;color:mintcream">{{$product->description}}</p>

           <p style="font-size:1.6em;color:mintcream">Precio: ${{$product->price}}</p>


           </div>


         </div>
         <br>


         <button type="submit" class="btn btn-dark" name="detalle_id" value="{{$product->id}}">Eliminar del Carrito</button>
       </div>

     @endforeach
   @endsection
