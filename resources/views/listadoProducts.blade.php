@include('partials.header')


<a href="create" class="btn btn-success">Nuevo Producto</a>
<br>

<a href="create" class="btn btn-success">Modificar</a>
<br>

  {{$products->links()}}

<ul>
  @foreach ($products as $product)
    <li class="productos"> {{$product->name}} <br> </li>

    <img class="imagen-productos" src="/storage/{{$product->imagen}}" alt="">

  <form class="" action="/carrito/{id}" method="post">
    @csrf

    <input type="submit" name="" value="addToCart">

  </form>

@endforeach

</ul>

@include('partials.footer')
