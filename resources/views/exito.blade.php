@extends('plantilla.plantilla')

@section('content')

<div class="">
<h2 class=""><span>Bienvenido a TU PERFIL</span><br>
@if (Auth::user()->isAdmin)
(USUARIO ADMINISTRADOR)
@else
@endif
</h2>
</div>


<!-- <div class="form-header">
<h2 class="form-title"><span>Bienvenido a TU PERFIL</span> <br>
@if (Auth::user()->isAdmin)
(USUARIO ADMINISTRADOR)
@else
@endif
</h2>
</div> -->

 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
 </form>

 <div class="row">
   <div class="col-12 col-md-6 col-lg-12">
     <div class="card bg-dark"   style="
         text-align: center;
         max-width: 50rem;
         margin: auto;
         padding-left: 0px;
         padding-top: 10px;
         ">
         <h4>Datos Registrados</h4>
     <div class="card-body">
         <p style="color: white; display:inline-block;">NOMBRE: </p>
         <p class="" style="color: orange; display:inline-block;">{{Auth::User()->name}}</p> <br>
         <p style="color: white; display:inline-block;">APELLIDO: </p>
         <p class="" style="color: orange; display:inline-block;">{{Auth::User()->last_name}}</p> <br>
         <p style="color: white; display:inline-block;">EMAIL : </p>
         <p class="" style="color: orange; display:inline-block;">{{Auth::User()->email}}</p> <br>
         <p style="color: white; display:inline-block;">AVATAR: </p>
         <p class="" style="color: orange; display:inline-block;"><img src="/storage/{{Auth::User()->avatar}}" alt="" class="avatar"></p> <br>
         <a href="index" class="btn btn-primary">Ir al Home</a>
         <a class="btn btn-danger" href=href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
              {{ __('Logout') }}
        >Cerrar Sesion</a>
       </div>
     </div>
   </div>
  </div>



@endsection
