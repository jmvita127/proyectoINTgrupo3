@extends('plantilla.plantilla')
@section('content')
  <div class="form-header">
    <h2 class="form-title">M<span>i</span> C<span>arrito</span> </h2>
  </div>

  @php
    $sumaPrecio=0;
    $sumaPrecioIva=0;
    $sumaProductos=0;
  @endphp

  <div>
    @foreach($products as $product)

      <div class="contenedor" style="width:100%;height:auto;margin:auto;padding:auto">

        <div class="media block-update-card">
          <a class="pull-left" href="#">
            <img class="media-object update-card-MDimentions" src="/storage/{{$product->imagen}}" style="width:200px;height:150px;margin:auto;padding:10px;;"alt="...">
          </a>
          <div class="media-body update-card-body" style="text-align:center;line-height:40px;">

            <h4 class="media-heading" style="font-size:2em;color:darkorange;">{{$product->name}}</h4>

            <p style="font-size:1.6em;color:mintcream">Precio: ${{$product->price}}</p>
            {{-- <p style="font-size:1.6em;color:mintcream">Cantidad: {{$product->quantity}}</p> --}}

          </div>

        </div>

        <input type="hidden" id="user_id" name="id" value="{{Auth::user()->id}}">
        <button type="button" id="delete" class="btn btn-danger" name="id" value="{{$product->id}}">Eliminar del Carrito</button>


      </div>

      @php
        $precioTotal1[]= ($product->price);
        $precioTotal2[]= ($product->price) + (($product->price*21)/100);
        $sumaPrecio = array_sum($precioTotal1);
        $sumaPrecioIva = array_sum($precioTotal2);

        // $productosTotal[]= $product->quantity;
        // $sumaProductos = array_sum($productosTotal);
      @endphp

    @endforeach




  </div>
  <br>



<div class="contenedor" style="width:100;height:auto;margin:auto;padding:auto">
   <form class="" action="" method="post">
    <div class="media block-update-card">
      <div class="media-body update-card-body" style="text-align:center;line-height:40px;">

        <p style="font-size:1.4em;color:mintcream;line-height:20px">Total: ${{$sumaPrecio}}</p>
        <p style="font-size:1.4em;color:mintcream;line-height:20px">IVA: 21%</p>
        <p style="font-size:1.4em;color:mintcream;line-height:20px">Total + IVA: ${{$sumaPrecioIva}}</p>

        {{-- <p style="font-size:1.6em;color:mintcream">Cantidad de Productos: {{$sumaProductos}}</p> --}}

        <input type="button" value="Actualizar" class="btn btn-primary" onclick="location.reload()"/>
        <button onclick="alert('💰💸 ERROR: FALTA CONTRATAR A MERCADO PAGO 💸💰')" type="button" name="button" class="btn btn-success">Finalizar Compra</button>


      </div>

    </div>
   </form>
  </div>

  <br>
  <script type="text/javascript" src="/js/cart/cart.js"></script>
@endsection
