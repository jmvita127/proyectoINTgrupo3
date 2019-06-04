
<a href="create" class="btn btn-success">Nuevo Producto</a>
<br>

<a href="create" class="btn btn-success">Modificar</a>
<br>

@foreach ($products as $product)
  {{$product->name}}<br>
@endforeach
