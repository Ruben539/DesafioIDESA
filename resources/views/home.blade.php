@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <title>Biblioteca</title>
    <!--TODO: Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--TODO: Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    {{--TODO: Cuerpo del Home  --}}
   <div class="container">
        {{--TODO: Se utiliza un include para llamar al nav a utlizar el sistema  --}}
            @include('include.nav')

         {{--TODO: Mensaje de bienvenida del sistema  --}}
         <br>
         <div class="card text-white text-center bg-success mb-3">
            <div class="card-header">Sistema de Biblioteca</div>
            <div class="card-body">
              <h5 class="card-title">Bienvendo al sistema</h5>
              <p class="card-text">Aqui podra registar cualquier libro que desee y llevar el registro de su libro favorito y su autor.</p>
            </div>
        
   </div>
    
</body>
    <!--TODO: Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</html>

@endsection

<style>
    .container {
        justify-content: center;
        justify-items: center
    }

</style>
