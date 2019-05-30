<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <h1>Editar Producto</h1>
    <div class="">
      @csrf
      <form class="" action="/create/validate" method="post">

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value=""><br>

        <label for="price">Precio</label>
        <input type="number" name="price" id="price" value=""><br>

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" value=""><br>

        <label for="description">Descripcion</label>
        <textarea name="description" id="description" rows="8" cols="80"></textarea><br>

        <button type="submit" class="btn btn-success">Guardar Cambios</button>

      </form>

    </div>
  </body>
</html>
