@include('partials.header')

<br>
<br>
<h2>CARTELERA DE PRODUCTOS</h2>
<br>
<a href="create" class="btn btn-success">Crear Producto</a>
<br>
<br>


  {{$products->links()}}
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
      @auth
      <a href="/product/edit/{{$product->id}}" class="btn btn-danger">Editar Producto</a>
      <a href="" class="btn btn-success"><img class="carrito" src="/imagenes/carrito.png" alt="" witdh="30" height="30"></a>
      @endauth
      @guest
      <a class="nav-link" href="register" style="color:orange;">REGISTRATE PARA COMPRAR!<span class="sr-only">(current)</span></a>
      @endguest
    </div>
  </div>
  </div>
  @endforeach
</div>
{{$products->links()}}


@include('partials.footer')
