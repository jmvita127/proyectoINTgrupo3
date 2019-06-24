@include('partials.header')

<div class="form-header">
  <h2 class="form-title">E<span>liminar</span> P<span>roducto</span> </h2>
</div>
<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
   @csrf
<div class="prueba1">Vas a borrar:</h2> <h4>{{old('name', $product->name)}}</h4>
 <br>
     <button type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>
 </form>


</div>
