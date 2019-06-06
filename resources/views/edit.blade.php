
<section class="principal">
      <article class="nuevas" id="productos">
          <div class="productos">
            <form method="post" action="">
              @csrf
              <h2>Edición de Productos</h2>
              <div class="form-row">
               <div  class="form-group col-md-4">
                   <label for="titulo">Name</label>
                   <input class="form-control" type="text" name="name"
                  id="title" value="{{old('name', $product->name)}}">
                  @error('title')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
               </div>
               </div>
               </div>
               <button type="submit" name="button" class="btn btn-primary">Guardar</button>
           </form>
         </div>
     </article>
 </section>
