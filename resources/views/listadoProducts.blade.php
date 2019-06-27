@include('partials.header')

<br>
<br>
<h2>CARTELERA DE PRODUCTOS</h2>
<br>
@if (isset(Auth::user()->isAdmin))
<a href="create" class="btn btn-success" style="margin-left: 55px">Crear Producto</a>
@endif
<br>
<br>

<!--
<ul>
  @foreach ($products as $product)
    <li class="productos"> {{$product->name}} <br> </li>

    <img class="imagen-productos" src="/storage/{{$product->imagen}}" alt="">

  <form class="" action="/carrito/{id}" method="post">
    @csrf

    <input type="submit" name="" value="addToCart">

  </form>

@endforeach

</ul> -->

<div class="row">
@foreach ($products as $product)
  <div class="col-12 col-md-6 col-lg-4">
  <div class="card text-white bg-dark mb-3"
  style="
    text-align: center;
    max-width: 25rem;
    margin: auto;
    padding-left: 0px;
    padding-top: 10px;
    ">
    <a name="quienes">
      <img src="/storage/{{$product->imagen}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-family: 'Orbitron', sans-serif;
      font-weight: bold;">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">Precio: ${{$product->price}}</p>
      <p class="card-text">Stock: {{$product->stock}}</p>
      @if (isset(Auth::user()->isAdmin))
      <a href="/product/edit/{{$product->id}}" class="btn btn-primary">Editar Producto</a>
      <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger">Eliminar</a>
      <a href="/carrito/{{$product->id}}" class="btn btn-success"><img class="carrito" src="/imagenes/carrito.png" alt="" witdh="30" height="30"></a>
      @endif
      @guest
      <a class="nav-link" href="register" style="color:orange;">REGISTRATE PARA COMPRAR!<span class="sr-only">(current)</span></a>
      @endguest
    </div>
  </div>
  </div>
  @endforeach
</div>

<div class="" style="margin-left: 55px">
  {{$products->links()}}
</div>

@include('partials.footer')
