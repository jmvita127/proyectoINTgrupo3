@extends('plantilla.plantilla')
@section('content')
<div class="form-header">
  <h2 class="form-title">E<span>liminar</span> P<span>roducto</span> </h2>
</div>
<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
   @csrf
<div class="prueba1">Vas a borrar:</h2> <h4>{{old('name', $product->name)}}</h4>
  <p class="" style="color: #ff851b; display:inline-block;"><img src="/storage/{{$product->imagen}}" alt="" class="avatar"></p> <br>
 <br>
     <button onclick="alert('El producto {{old('name', $product->name)}} fue eliminado correctamente. Volviendo a Seccion Gaming.')" type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>

 </form>

<br>
<br>
<br>
</div>
@endsection
