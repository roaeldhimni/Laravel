<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gestion</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-wpN/HoGkeN9D1fRBJJojqhgsj/VIJ1Qn+WtTUzq3cSKmTqqpijWK9Z8mWJvbFQMFjs1sCgghz4YhBLpMWRHvZQ==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='vendor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vendor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link rel="stylesheet" href="style/main.css">

    <script src='vendor/jquery-3.2.1.min.js'></script>
    <script src='vendor/bootstrap-4.1/popper.min.js'></script>
    <script src='vendor/bootstrap-4.1/bootstrap.min.js'></script>
    
    <style>
           
            body {
                background-color: Beige;
                font-family: 'Segoe UI', sans-serif;
            }
            
            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            
            .btn {
                font-size: 1.5rem;
                padding: 1.5rem 2.5rem;
                border-radius: 10rem;
                margin: 0 1.5rem;
                box-shadow: 0 1rem 3rem rgba(0,0,0,0.15);
                transition: all 0.3s ease;
                background: none;
                color: #444;
                border: 2px solid #444;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                position: relative;
                z-index: 1;
                overflow: hidden;
            }
            
            .btn:before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) scale(0);
                width: 100%;
                height: 100%;
                background-color: #444;
                opacity: 0.5;
                border-radius: 50%;
                z-index: -1;
                transition: transform 0.3s ease-in-out;
            }
            
            .btn:hover:before {
                transform: translate(-50%, -50%) scale(3);
            }
            
            .btn:hover {
                transform: translateY(-0.25rem);
                box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.2);
                color: #fff;
                background-color: #444;
                border-color: #444;
            }
            
            .btn-primary {
                background-color: #1b6ec2;
                border-color: #1b6ec2;
            }
            
            .btn-secondary {
                background-color: #17a2b8;
                border-color: #17a2b8;
            }
            
            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn i {
                font-size: 1.8rem;
                margin-right: 1rem;
            }

            .btn-primary i {
                color: #fff;
            }

            .btn-secondary i {
                color: #fff;
            }

            .btn-success i {
                color: #fff;
            }
            .btn-indigo {
                color: black;
                background-color: #FFA07A;
            }
        </style>
</head>



<!-- resources/views/dashboard.blade.php -->
<!-- resources/views/dashboard.blade.php -->

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <!-- <img src="./image/Gestion.png" alt="Logo"> -->
                <p><b>Dashboard</b></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('salles.index') }}">Salles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('machines.indexm') }}">Machines</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Connexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('salles.index') }}" class="btn btn-primary"><i class="fas fa-door-open mr-2"></i>  Gérer salles</a>
                </div>
                <div class="col text-center">
                    <a href="{{ route('machines.indexm') }}" class="btn btn-secondary"><i class="fas fa-cogs mr-2"></i> Gérer machines</a><br><br>
                </div>
                <div class="col text-center">
                    <a href="{{ route('graphique') }}" class="btn btn-success"><i class="fas fa-chart-line mr-2"></i> Statistiques</a>
                </div>
                 <div class="col text-center">
                    <a href="{{ route('machines.index') }}" class="btn btn-success" ><i class="fas fa-list-ul mr-2"></i>> Machines par salle</a>
                </div>
            </div>
        </div>
        <footer class="bg-light py-5">
            
            <div class="container-fluid">
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

</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>