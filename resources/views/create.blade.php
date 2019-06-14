@extends('plantilla.plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/estilo/estiloform.css">
    <link rel="stylesheet" href="/css/estilo/estilo.css">
    <title></title>
  </head>
  <body>
    <div class="form-header">
      <h2 class="form-title">C<span>rear</span> P<span>roducto</span> </h2>
    </div>
    <div class="contenedor">
      <form class="formulariogrande" action="/create/validate" method="post" enctype="multipart/form-data">
       @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value=""><br>
        @error('name')
           <div class="alert alert-danger">{{ $message }}
       @enderror</div>
        <label for="price">Precio</label>
        <input type="number" name="price" id="price" value=""><br>
        @error('price')
           <div class="alert alert-danger">{{ $message }}
       @enderror</div>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" value=""><br>
        @error('stock')
           <div class="alert alert-danger">{{ $message }}
       @enderror</div>
        <label for="description">Descripcion</label>
        <textarea name="description" id="description" rows="8" cols="80"></textarea><br>
        @error('description')
           <div class="alert alert-danger">{{ $message }}
       @enderror</div>
       <label for="imagen">IMAGEN</label>
       <input type="file" name="imagen" id="imagen" value=""><br>
       @error('name')
          <div class="alert alert-danger">{{ $message }}
      @enderror</div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>

      </form>

    </div>
  </body>
</html>
@endsection
