@extends('plantilla.plantilla')

@section('content')
<style media="screen">
  .invalid-feedback{
    display:inline-block;
  }
</style>

<div class="contenedor">
  <form class="formulariogrande" id="form-login" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-header">
      <h2 class "form-title">I<span>ngresar</span></h2>
    </div>

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform"></pre></label>


    <div class="">
      <input class="form-input @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

      {{-- @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ "Usuario o contraseña incorrectos" }}</strong>
          </span>
      @enderror --}}
  </div>

<div class="">

    <label class="form-label" for="password">Contraseña </label>
    <input class="form-input @error('password') is-invalid @enderror" id="password" type="password"  name="password" value="{{ old('password') }}" autocomplete="password" autofocus>

    {{-- @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "hola" }}</strong>
        </span>
    @enderror --}}

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ "Usuario o contraseña incorrectos" }}</strong>
        </span>
    @enderror
  </div>

    <div class="">
      <input type="checkbox" name="remember" id="recordarme" {{ old('remember') ? 'checked' : '' }}>
      <label for="remember">{{ __('Recordarme') }}</label>
    </div>

    <div class="olvide">

            <button type="submit" class="btn btn-primary">
                {{ __('Ingresar') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif


    <div class="noTengo">
      ¿No tenés usuario? <a href="register">¡Registrate!</a>
    </div>


  </div>
  </form>
  <br>
</div>
<script type="text/javascript" src="/js/login/login.js"></script>
@endsection
