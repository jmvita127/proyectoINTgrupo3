@extends('plantilla.plantilla')
@section('content')
<div class="form-header">
  <h2 class="form-title">M<span>i</span> C<span>arrito</span> </h2>
</div>


 @foreach($products as $product)

   <form class="formulariogrande" id="formCart" action="/carrito/eliminarCarrito" method="post" enctype="multipart/form-data">
     @csrf
     <div class="contenedor">


       <div class="media block-update-card">
         <a class="pull-left" href="#">
           <img class="media-object update-card-MDimentions" src="/storage/{{$product->imagen}}" style="width:80%;margin:0;padding:0;"alt="...">
         </a>
         <div class="media-body update-card-body" style="text-align:center;line-height:50px;">

           <h4 class="media-heading" style="font-size:2em;color:darkorange;">{{$product->name}}</h4>


           <p style="font-size:1.6em;color:mintcream">Precio: ${{$product->price}}</p>


         </div>


       </div>
       <br>

          <input type="hidden" id="user_id" name="id" value="{{Auth::user()->id}}">
          <button type="button" id="delete" class="btn btn-dark" name="id" value="{{$product->id}}">Eliminar del Carrito</button>


     </div>


   </form>
 @endforeach
 <script type="text/javascript" src="/js/cart/cart.js"></script>
@endsection
