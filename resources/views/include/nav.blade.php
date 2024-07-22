{{--TODO: Barra de navegacion superior del sistema.  --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><b>Home</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('authors.index')}}">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('books.index')}}">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('debts.index')}}">Ejercicio 2</a>
        </li>
      </ul>
    </div>
  </nav>

  <style>
    .navbar {
        background-color: #e3f2fd;
    }

    .navbar-brand {
        font-size: 22px;
       margin-block-end: 5px;
       margin-left: 15px;
    }
    .nav-link {
        margin-left: 15px;
        font-size: 20px;
    }
  </style>