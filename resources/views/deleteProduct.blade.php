@include('partials.header')

<br>
<div class="form-header">
  <h2 class="form-title">E<span>liminar</span> P<span>roducto</span> </h2>
</div>

<div class="row">
  <div class="col-12 col-md-6 col-lg-12">
  <div class="card text-white bg-dark mb-3"
  style="
    text-align: center;
    max-width: 35rem;
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
        <br>
      <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger">Eliminar</a>
      @endauth

 </div>
