@extends('plantilla.plantilla')

@section('content')


<h3 class="bienvenida">Bienvenido, {{Auth::User()->name}}<img src="/storage/{{Auth::User()->avatar}}" alt="" class="avatar">
<br><a class="perfil" href="index" style="margin: auto ">INICIO</a><br>
<a class="perfil" href=href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
     {{ __('Logout') }}
 style="color:red;">Cerrar Sesion</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf

 </form>
</a></h3>

@if (Auth::user()->isAdmin)
<h3>SOS ADMIN</h1>
@else
<!-- <h3>NO SOS ADMIN</h3> -->
@endif

<div class="alert alert-success alert-dismissible fade show" id="cartel" role="alert" style=" margin: auto;">
  <strong>El loggeo se ha completado de forma exitosa! <br>
          Gracias por confiar en Negocios Informaticos SA.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endsection
