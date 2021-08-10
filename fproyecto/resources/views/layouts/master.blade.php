<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>LA OBRA</title>
  </head>
  <body background="{{asset('img/fondo.jpg')}}">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand text-dark active" href="{{route('home')}}">
                    <img class="logo img-fluid" src="{{asset('img/logo.png')}}">
                    <img class="logo img-fluid" src="{{asset('img/logotexto.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link text-dark" aria-current="page" href="{{route('home')}}">Inicio</a>
                  <a class="nav-link text-dark" href="{{route('agregar_cliente')}}">Agregar cliente</a>
                  <a class="nav-link text-dark" href="{{route('ver_clientes')}}">Ver clientes</a>
                  <a class="nav-link text-dark" href="{{route('agregar_empleado')}}">Agregar empleado</a>
                  <a class="nav-link text-dark" href="{{route('ver_empleados')}}">Ver empleados</a>
                  <a class="nav-link text-dark" href="{{route('agregar_producto')}}">Agregar producto</a>
                  <a class="nav-link text-dark" href="{{route('ver_productos')}}">Ver productos</a>
                  <a class="nav-link text-dark" href="{{route('agregar_categoria')}}">Agregar categoria</a>
                  <a class="nav-link text-dark" href="{{route('ver_categorias')}}">Ver categorias</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- No sirvio :( 
    <script src="https://cdn.jsdelivr.net/npm/rut.js@2.0.0/index.min.js"></script>
    <script src="{{asset('vendor/index.js')}}"></script>
    -->
    <script src="{{asset('js/axios_config.js')}}"></script>
    @yield("javascript")
    
  </body>
</html>