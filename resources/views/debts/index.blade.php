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

            {{-- TODO: Lista de usuarios del sistema.  --}}

            <h1 class="text-center">Lista de lotes </h1>



            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">

                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>Ejercicio 1</th>
                                <th>Ejercicio 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <a class="btn btn-outline-info" href="{{ route('debts.create') }}">
                                    Presionar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-outline-warning" href="{{ route('debts.edit') }}">
                                    Presionar
                                </a>
                            </td>
                        </tbody>
                    </table>

                </div>
                <hr>
                <form method="POST" action="{{ route('debts.show') }}">
                    @csrf

                    <div class="form-row">
                        <label for="lote">Seleccione el lote a buscar</label>
                        <select name="lote" id="lote" class="form-control">
                            @foreach ($debs as $debs)
                                <option value="{{ $debs->lote }}">{{ $debs->lote }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row mt-3 text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>


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
    .container {
        justify-content: center;
        justify-items: center;
    }
</style>
