@extends('plantilla.plantilla')
@section('content')
<style media="screen">
.invalid-feedback{
  display:inline-block;
}
</style>

    <div class="form-header">
      <h2 class="form-title">C<span>rear</span> P<span>roducto</span> </h2>
    </div>
    <div class="contenedor">
      <form class="formulariogrande" id="formCreate" action="/create/validate" method="post" enctype="multipart/form-data">
       @csrf

        <label for="name">Nombre</label>
        <div class="">
        <input type="text" name="name" id="name" value="{{old('name')}}"><br>
          @error('name')
          <span class="alert alert-danger">
            <strong>{{ $message }}</strong>
          </span>
           @enderror <br>
        </div>


        <label for="price">Precio</label>
        <div class="">
        <input type="text" name="price" id="price" value="{{old('price')}}"><br>
        @error('price')
        <span class="alert alert-danger">
          <strong>{{ $message }}</strong>
        </span>
       @enderror <br>
       </div>


        <label for="stock">Stock</label>
        <div class="">
        <input type="text" name="stock" id="stock" value="{{old('stock')}}"><br>
        @error('stock')
        <span class="alert alert-danger">
          <strong>{{ $message }}</strong>
        </span>
       @enderror <br>
       </div>


        <label for="description">Descripcion</label>
        <div class="">
        <textarea name="description" id="description" rows="8" cols="40"></textarea><br>
        @error('description')
        <span class="alert alert-danger">
          <strong>{{ $message }}</strong>
        </span>
       @enderror <br>
        </div>


       <label for="imagen">IMAGEN</label>
       <div class="">
       <input type="file" name="imagen" id="imagen" value="{{old('imagen')}}"><br>
       @error('imagen')
       <span class="alert alert-danger">
         <strong>{{ $message }}</strong>
       </span>
      @enderror <br>
      </div>


        <button type="submit" class="btn btn-success">Crear Producto</button>

      </form>
    </div>

<script type="text/javascript" src="/js/Products/createProduct.js"></script>
@endsection
