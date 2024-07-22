@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <title>Biblioteca</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
   {{--TODO: Se utiliza un include para llamar al nav a utlizar el sistema  --}}
   @include('include.nav')

   {{--TODO: Inicio del formulario de grabado de Usuario.  --}}
    <h1 class="text-center">Grabar un Usuario</h1>
    <div class="container">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
       
            <div class="form-row">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-row">
                <label for="email">Correo</label>
                <input class="form-control" type="email" name="email" min="1.00" step="0.01"
                    value="{{ old('email') }}">
            </div>

            <div class="form-row">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" min="0" value="{{ old('password') }}">
            </div>

    
            <div class="form-row mt-3 text-center">
                <button class="btn btn-primary btn-lg" type="submit">Grabar Usuario</button>
            </div>

        </form>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>


</html>


    
@endsection
