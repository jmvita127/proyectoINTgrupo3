<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
  <link rel="stylesheet" href="/css/estilo/estiloform.css">
  <link rel="stylesheet" href="/css/estilo/estilo.css">
  <link rel="shortcut icon" href="/imagenes/logo.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Negocios Informáticos</title>
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="NISA" href="index"></a><h1>NISA <a href="index"><img class="logo" src="/imagenes/logo.jpg" alt="logo" witdh="100" height="110"></a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index" style="color:orange;">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:orange;">PRODUCTOS</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="products" style="color:orange;">EQUIPOS</a>
              <a class="dropdown-item" href="products" style="color:orange;">CONSOLAS</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="quienesSomos" style="color:orange;">¿QUIENES SOMOS? <span class="sr-only">(current)</span></a>
        </li>

        </ul>
        <form action="/products" class="form-inline my-2 my-lg-0" id="buscador" method="get">
          <input class="form-control mr-sm-2" type="text" name="name" placeholder="Buscar Producto" aria-label="Search">
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>



        <li class="carrito">
          <a href="carrito">  <img class="carrito" src="/imagenes/carrito.png" alt="" witdh="30" height="30"> </a>
        </li>
        @auth

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:orange;">Bienvenido, <img class="avatar" src="/storage/{{Auth::User()->avatar}}" alt=""> <br> {{Auth::User()->name}} </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="exito" style="color:red;">Perfil</a>

              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                   {{ __('Logout') }}
               style="color:red;">Log out</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf

               </form>


            </div>
          </li>




        @endauth

        @guest
          <li class="boton">
            <button class="btn" type="submit"></button><br>
            <a class="botonreg" href="register"><button type="button" class="btn btn-outline-danger">REGISTRARSE</button></a>
            <a href="login"> <button type="button" class="btn btn-outline-warning">INGRESAR</button></a>


          </li>

        </div>
      @endguest

    </nav>
  </header>
