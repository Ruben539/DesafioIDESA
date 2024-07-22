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

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://cdn.evaluar.com/jobboards/prod/wp-content/uploads/jobboards/sites/601/2024/03/20204954/Idesalogo.png"
                          style="width: 185px; margin-bottom: 10px;" alt="logo">
                      </div>
      
                      <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <p class="text-center" style="font-size: 20px;">Registrarme</p>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="name">Nombre</label>
                          <input type="text" id="name" name="name" class="form-control"
                            placeholder="Ingrese su nombre " required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="email">Correo</label>
                          <input type="email" id="email" name="email" class="form-control"
                            placeholder="Ingrese su direccion de correo" required />
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="password">Contraseña</label>
                          <input type="password" id="password" name="password" class="form-control" required />
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarme
                           </button>
    
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Ir al </p>
                          <a href="{{route('login')}}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Inicio de Sesión</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4 text-center">Sistema de Biblioteca</h4>
                      <p class="small mb-0">Para ingresar a la web debe registrarse primero.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
