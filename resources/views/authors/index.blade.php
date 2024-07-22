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

   {{--TODO: Lista de usuarios del sistema.  --}}

        <h1 class="text-center">Lista de los Autores <a class="btn btn-success mb-3" href="{{ route('authors.create') }}"><i class="fas fa-plus"></i> Crear Nuevo</a></h1>
        

        @if (empty($authors))
            <div class="alert alert-warning">
                Esta lista de Autores esta Vacia
            </div>
        @else
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
    
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha de Cumpleaños</th>
                                <th>Nacionalidad</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $authors)
                                <tr class="text-center">
                                    <td>{{ $authors->id }}</td>
                                    <td>{{ $authors->name }}</td>
                                    <td>{{ $authors->birthdate }}</td>
                                    <td>{{ $authors->nationality }}</td>
    
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('authors.edit', [$authors->id]) }}"><i
                                                class="fas fa-edit"></i> Editar</a>
                                    </td>
    
                                    <td>
                                        <form class="d-inline" method="GET"
                                            action="{{ route('authors.destroy', [
                                                'author' => $authors->id,
                                            ]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                                Eliminar</button>
    
                                        </form>
                                    </td>
    
    
                                </tr>
                            @endforeach
    
                        </tbody>
                    </table>
                </div>
            </div>
        
        @endif
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection

<style>
    .container  {
        justify-content: center;
        justify-items: center;
    }
</style>
