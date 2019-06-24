@extends('plantilla.plantilla')

@section('content')

@auth
<h1> ya estas registrado</h1>
@endauth

<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-header">
      <h2 class="form-title">R<span>egistro</span> </h2>
    </div>


    <label class="form-label" for="name">Nombre <pre id="errorform"></pre></label>
    <input class="form-input" id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label class="form-label" for="last_name">Apellido <pre id="errorform"></pre></label>
    <input class="form-input" id="last_name" type="text" @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

    @error('last_name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform"></pre></label>
    <input class="form-input" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label class="form-label" for="password">Contraseña <pre id="errorform"></pre></label>
    <input class="form-input" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label class="form-label" for="password-confirm">Confirmar Contraseña <pre id="errorform"></pre> </label>
    <input class="form-input" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

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
    <input class="form-input" id="avatar" type="FILE" class="form-control @error('avatar') is-invalid @enderror" name="avatar">

    @error('avatar')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <br>
    <input type="submit" class="btn-submit" name="" value="Registrarse">
  </form>
  <br>
</div>


@endsection
