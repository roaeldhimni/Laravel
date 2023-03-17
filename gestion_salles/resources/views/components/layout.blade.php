<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blog Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/main.css" />
    <style > 
    body{
    background-image: url("./image/background.jpg");
    background-size: cover;
    height: 100vh;
    width: 100%;
    }
</style>
</head>

<body>
    <header class="header-bar mb-3">
        <div class="container d-flex flex-column flex-md-row align-items-center p-3">
        <!-- <img src="/image/Gestion.png" alt="Logo" class="logo"> -->
            <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-dark"><b> Gestion Salles & Machines</b></a></h4>
            @auth
                <div class="flex-row my-3 my-md-0">
                    <span class="text-dark mr-2">Hi, <strong>{{ Str::ucfirst(auth()->user()->username) }}</strong></span>
                    <!-- <a class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a> -->
                    <form action="{{ route('user.logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-danger">Sign Out</button>
                    </form>
                </div>
            @else
                <form action="{{ route('user.login') }}" method="POST" class="mb-0 pt-2 pt-md-0">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                            <input name="loginusername" class="form-control form-control-sm input-dark" type="text"
                                placeholder="Username" autocomplete="off" />
                        </div>
                        <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                            <input name="loginpassword" class="form-control form-control-sm input-dark" type="password"
                                placeholder="Password" />
                        </div>
                        <div class="col-md-auto">
                            <button class="btn btn-primary btn-sm">Sign In</button>


                            <!-- <a href="{{ route('user.test') }}" class="btn btn-success" >Sign In</a> -->
                        </div>
                    </div>
                </form>
            @endauth
        </div>
    </header>
    <style>
        .logo {
            margin-right: 1rem; /* adjust as needed */
     }
    </style>
    <!-- header ends here -->
    @if (session('status'))
        <div class="container container--narrow">
            <div class="alert alert-{{ session('color') ?? 'danger' }} text-center">
                {{ session('status') }}
            </div>
        </div>
    @endif

    {{ $slot }}

    <!-- footer begins -->
    <!--<footer class="border-top text-center small text-muted py-3">
        <p class="m-0">Copyright &copy; 2023 <a href="/" class="text-muted">Blog Post</a>. All rights reserved.
        </p>
    </footer>--> 
    <footer class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Liens utiles</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="/" class="text-muted">Accueil</a></li>
                    <li><a href="/about" class="text-muted">À propos</a></li>
                    <li><a href="/contact" class="text-muted">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Suivez-nous</h5>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/votrepage" target="_blank" class="text-muted">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/votrecpt" target="_blank" class="text-muted">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/votrepage" target="_blank" class="text-muted">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="text-uppercase mb-4">Tous les droits sont réservés</h5>
                <p class="text-muted mb-0">© {{ date('Y') }} Votre entreprise.</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script>
        $('[data-toggle="tooltip"]').tooltip()
    </script>
</body>

</html>
