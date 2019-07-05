@extends('plantilla.plantilla')
@section('content')
  <div class="form-header">
    <h2 class="form-title">D<span>etalle</span> P<span>roducto</span> </h2>
  </div>
  <div class="contenedor">
    <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-12 col-md-6 col-lg-12">
        <div class="card text-white bg-dark mb-3"
        style="
        text-align: center;
        max-width: 50rem;
        margin: auto;
        padding-left: 0px;
        padding-top: 10px;
        ">
        <a name="quienes">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Orbitron', sans-serif;
            font-weight: bold;">{{old('name', $product->name)}}</h5>

            <p class="card-text">{{old('description', $product->description)}}</p>

            @guest
              <a class="nav-link" href="/register" style="color:orange;">REGISTRATE PARA COMPRAR!<span class="sr-only">(current)</span></a>
            @endguest
            <br>

            <a href="/products" class="btn btn-info">Volver Atras</a>

          </div>

        </div>
      </div>
    </div>
  </form>
@endsection
