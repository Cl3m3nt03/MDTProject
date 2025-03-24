<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="bg-dark">
        <div class="relative">
        <nav class="navbar navbar-expand-lg bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SASP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="border border-primary rounded" type="submit">Search</button>
                    </form>

                    <div class="d-flex ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link active ms-3" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a class="nav-link active ms-3" aria-current="page" href="{{ route('login') }}">Log in</a>

                                @if (Route::has('register'))
                                    <a class="nav-link active ms-3" aria-current="page" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
                </div>
            </nav>
        </div>

        <div class="container text-center text-light">
      <div class="row justify-content-center">
        <div class="col-4">
          Photo 
          <img src="{{ url('/assets/dqsdq.png') }}" alt="..." loading="lazy">
        </div>
        <div class="col-4">
        Le San Andreas State Police en collaboration avec le Los Santos Police Department sont responsable du maintient de l'ordre dans tout l'état de San Andreas. Comme le Blaine County Sheriff's Office n'est pas encore ouvert se sont les deux seuls responsable de la branche exécutive à San Andreas.
        </div>
      </div>
      <div>
      <div class="card text-primary" style="width: 18rem;">
        <img src="https://img.freepik.com/photos-gratuite/fond-gris-peint_53876-94041.jpg" class="card-img-top" alt="Test Image">
        <div class="card-body">
            <h5 class="card-title">Units n°1</h5>
            <p class="card-text">XXX.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <div class="card text-primary" style="width: 18rem;">
        <img src="https://img.freepik.com/photos-gratuite/fond-gris-peint_53876-94041.jpg" class="card-img-top" alt="Test Image">
        <div class="card-body">
            <h5 class="card-title">Units n°2</h5>
            <p class="card-text">XXX.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <div class="card text-primary" style="width: 18rem;">
        <img src="https://img.freepik.com/photos-gratuite/fond-gris-peint_53876-94041.jpg" class="card-img-top" alt="Test Image">
        <div class="card-body">
            <h5 class="card-title">Units n°3</h5>
            <p class="card-text">XXX.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
      </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
