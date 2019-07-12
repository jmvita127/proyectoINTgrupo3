@extends('plantilla.plantilla')
@section('content')
<style media="screen">
  .invalid-feedback{
    display:inline-block;
  }
</style>
 <div class="form-header">
   <h2 class="form-title">A<span>ctualizar</span> P<span>roducto</span> </h2>
 </div>
 <div class="contenedor">
   <form class="formulariogrande" id="formEdit" action="" method="post" enctype="multipart/form-data">
    @csrf

     <label for="name">Nombre</label>
     <div class="">
     <input type="text" class=" @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name', $product->name)}}"><br>
     @error('name')
        <span class="alert alert-danger">
          <strong>{{ $message }}</strong>
        </span>
    @enderror <br>
    </div>


     <label for="price">Precio</label>
     <div class="">
     <input type="text" class=" @error('price') is-invalid @enderror" name="price" id="price" value="{{old('price', $product->price)}}"><br>
     @error('price')
     <span class="alert alert-danger">
       <strong>{{ $message }}</strong>
     </span>
    @enderror <br>
    </div>


     <label for="stock">Stock</label>
     <div class="">
     <input type="text" class=" @error('stock') is-invalid @enderror" name="stock" id="stock" value="{{old('stock', $product->stock)}}"><br>
     @error('stock')
     <span class="alert alert-danger">
       <strong>{{ $message }}</strong>
     </span>
    @enderror <br>
    </div>

     <label for="description">Descripcion</label>
     <div class="">
     <textarea name="description" id="description" rows="8" cols="40">{{old('description', $product->description)}}</textarea><br>
     @error('description')
     <span class="alert alert-danger">
       <strong>{{ $message}}</strong>
     </span>
    @enderror <br>
    </div>


    <label for="imagen">IMAGEN</label>
    <div class="">
    <input type="file" name="imagen" id="imagen" value="<img src="{{old('imagen', $product->imagen)}}" alt=""><br>
    @error('imagen')
    <span class="alert alert-danger">
      <strong>{{ $message }}</strong>
    </span>
   @enderror <br>
   </div>
     <button onclick="alert('El producto {{old('name', $product->name)}} fue actualizado correctamente. Volviendo a seccion Gaming.')" type="submit" name="button" class="btn btn-danger">Actualizar Producto</button>



   </form>
<script type="text/javascript" src="/js/Products/editProduct.js"></script>
 </div>
@endsection
