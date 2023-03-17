<html>
    <head>
        <title>Liste des machines par salle</title>
        <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

        <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
			color: #333;
			margin: 0;
			padding: 0;
		}

		h1 {
			/* background-color: #222; */
			color: #fff;
			padding: 20px;
			margin-top: 0;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			margin: 0 auto;
			width: 80%;
			max-width: 800px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}

		th, td {
			padding: 15px;
			text-align: left;
		}

		th {
			background-color: #444;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		li {
			margin: 5px 0;
			color: #444;
		}     
	</style>
       
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
        <br><br><br><br>
<h1 style="color: #333;">Liste des machines par salle</h1>

<table style="border-collapse: collapse; width: 100%;" id="table-machines">

    <thead>
        <tr>
            <th style="background-color: #444; color: #fff; padding: 8px; text-align: left;">Salle</th>
            <th style="background-color: #444; color: #fff; padding: 8px; text-align: left;">Machines</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($salles as $salle)
            <tr style="background-color: #f2f2f2;">
                <td style="padding: 8px;">{{ $salle->libelle }}</td>
                <td style="padding: 8px;">
                    <ul style="margin: 0; padding: 0; list-style: none;">
                        @foreach ($salle->machines as $machine)
                            <li style="color: #444;">{{ $machine->reference }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#table-machines').DataTable();
    });
</script>
<br><br><br><br><br><br>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8fj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>