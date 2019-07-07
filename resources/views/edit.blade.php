@extends('plantilla.plantilla')
@section('content')
 <div class="form-header">
   <h2 class="form-title">A<span>ctualizar</span> P<span>roducto</span> </h2>
 </div>
 <div class="contenedor">
   <form class="formulariogrande" id="formEdit" action="" method="post" enctype="multipart/form-data">
    @csrf

     <label for="name">Nombre</label>
     <div class="">
     <input type="text" name="name" id="name" value="{{old('name', $product->name)}}"><br>
     @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
    </div>


     <label for="price">Precio</label>
     <div class="">
     <input type="text" name="price" id="price" value="{{old('price', $product->price)}}"><br>
     @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
    </div>


     <label for="stock">Stock</label>
     <div class="">
     <input type="text" name="stock" id="stock" value="{{old('stock', $product->stock)}}"><br>
     @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
    </div>

     <label for="description">Descripcion</label>
     <div class="">
     <textarea name="description" id="description" rows="8" cols="40">{{old('description', $product->description)}}</textarea><br>
     @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
    </div>


    <label for="imagen">IMAGEN</label>
    <div class="">
    <input type="file" name="imagen" id="imagen" value="<img src="{{old('imagen', $product->imagen)}}" alt="">"<br>
    @error('imagen')
       <div class="alert alert-danger">{{ $message }}</div>
   @enderror <br>
   </div>
     <button type="submit" class="btn btn-success">Actualizar Producto</button>




<script type="text/javascript" src="/js/editProduct/editProduct.js"></script>
   </form>

 </div>
@endsection
