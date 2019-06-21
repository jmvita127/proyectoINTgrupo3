@include('partials.header')

 <div class="form-header">
   <h2 class="form-title">E<span>liminar</span> P<span>roducto</span> </h2>
 </div>
 <div class="contenedor">
   <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    @csrf
     <label for="name">Nombre</label>
     <input type="text" name="name" id="name" value="{{old('name', $product->name)}}"><br>
     @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
     <label for="price">Precio</label>
     <input type="number" name="price" id="price" value="{{old('price', $product->price)}}"><br>
     @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
     <label for="stock">Stock</label>
     <input type="number" name="stock" id="stock" value="{{old('stock', $product->stock)}}"><br>
     @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>
     <label for="description">Descripcion</label>
     <textarea name="description" id="description" rows="8" cols="40"></textarea><br>
     @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror <br>

      {{-- <input type="hidden" name="id" value="{{$product->id}}"> --}}
      <button type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>
  </form>


 </div>
