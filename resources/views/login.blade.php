@extends('plantilla.plantilla')

@section('content')
<div class="contenedor">
  <form class="formulariogrande" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-header">
      <h2 class "form-title">I<span>ngresar</span></h2>
    </div>

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform"></pre></label>

    <input class="form-input" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


    <label class="form-label" for="password">Contraseña </label>
    <input class="form-input" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

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
      ¿No tenés usuario? <a href="registro">¡Registrate!</a>
    </div>


  </div>
  </form>
  <br>
</div>


@endsection
