@extends('plantilla.plantilla')

@section('content')
  <style media="screen">
    .invalid-feedback{
      display:inline-block;
    }
  </style>
@auth
<h1> ya estas registrado</h1>
@endauth

<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-header">
      <h2 class="form-title">R<span>egistro</span> </h2>
    </div>


      <label class="form-label" for="name">Nombre<pre id="errorform"></pre></label>
      <div class="">
      <input class="form-input @error('name') is-invalid @enderror" id="name" type="text"  name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ "INGRESE NOMBRE VALIDO" }}</strong>
          </span>
      @enderror
    </div>



    <label class="form-label" for="last_name">Apellido <pre id="errorform"></pre></label>
    <div class="">
    <input class="form-input @error('last_name') is-invalid @enderror" id="last_name" type="text"  name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>
    @error('last_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "INGRESE APELLIDO VALIDO" }}</strong>
        </span>
    @enderror
    </div>



    <label class="form-label" for="email">Correo Electrónico <pre id="errorform"></pre></label>
    <div class="">
    <input class="form-input @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "INGRESE EMAIL VALIDO" }}</strong>
        </span>
    @enderror
    </div>



    <label class="form-label" for="password">Contraseña <pre id="errorform"></pre></label>
    <div class="">
    <input class="form-input @error('password') is-invalid @enderror" id="password" type="password"  name="password" value="{{ old('password') }}" autocomplete="password" autofocus>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "INGRESE CONTRASEÑA VALIDA" }}</strong>
        </span>
    @enderror
    </div>


    <label class="form-label" for="password-confirm">Confirmar Contraseña <pre id="errorform"></pre></label>
    <div class="">
    <input class="form-input @error('password_confirmation') is-invalid @enderror" id="password_confirmation" type="password"  name="password_confirmation" autocomplete="new-password">
    @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "LA CONTRASEÑA NO COINCIDE" }}</strong>
        </span>
    @enderror
    </div>



    {{-- <label class="form-label" for="pregunta">Pregunta de Seguridad<pre id="errorform">INGRESAR ERROR</pre></label>
    <select class="form-input" name="pregunta-formulario">
      <option value = 0 >Click para elegir pregunta</option>
      <option value = 1 >¿Cómo se llamaba su escuela secundaria? </option>
      <option value = 2 >¿Cuantas mascotas tuvo en toda su vida? </option>
      <option value = 3 >¿A qué lugar le gustaría viajar? </option>
    </select> --}}

    <!--
    //$array = ["Click aqui para elegir pregunta","¿Cómo se llamaba su escuela secundaria?","¿Cuantas mascotas tuvo en toda su vida?","¿A qué lugar le gustaría viajar?"];
     -->

    {{-- <label class="form-label" for="respuesta">Respuesta de Seguridad<pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" type="text" name="respuesta-formulario" placeholder="Ingrese una Respuesta..." value=""> --}}


    <label class="form-label" for="avatar">Avatar:<pre id="errorform"></pre></label>
    <div class="">
    <input class="form-input @error('avatar') is-invalid @enderror" id="avatar" type="FILE" name="avatar">
    @error('avatar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "SUBA UNA IMAGEN" }}</strong>
        </span>
    @enderror
    </div>



    <br>
    <input type="submit" class="btn-submit" name="" value="Registrarse">
  </form>
  <br>
</div>
<script type="text/javascript" src="/js/login/register.js"></script>


@endsection
