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
            {{-- TODO: Se utiliza un include para llamar al nav a utlizar el sistema  --}}
            @include('include.nav')

            {{-- TODO: Inicio del formulario de edicion del Autor.  --}}
            <h1 class="text-center">Editar Autor</h1>
            <div class="container">

                <form method="POST" action="{{ route('authors.update', ['author' => $authors->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <label for="name">Nombre</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') ?? $authors->name }}">
                    </div>

                    <div class="form-row">
                        <label for="birthdate">Fecha de Nacimiento</label>
                        <input class="form-control" type="date" name="birthdate"
                            value="{{ old('birthdate') ?? $authors->birthdate }}">
                    </div>


                    <div class="form-row">
                        <label for="nationality">Nacionalidad</label>
                        <input class="form-control" type="" name="nationality"
                            value="{{ old('nationality') ?? $authors->nationality }}">
                    </div>



                    <div class="form-row mt-3 text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Editar Autor</button>
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

<style>
    .container {
        justify-content: center;
        justify-items: center;
    }
</style>
