<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des machines</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <style>
    .custom-header {
        background-color: red;
    }
  </style>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
    </script>

  
  
</head>
<body>
    <header class="custom-header">
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
    <br><br>
    <h1 class="text-center my-5">Liste des machines:</h1>
    <table class="table table-striped table-bordered" id="machine-table">
      <thead class="thead-dark">
        <tr>
          <th>id</th>
          <th>reference</th>
          <th>marque</th>
          <th>dateAchat</th>
          <th>prix</th>
          <th>salleid</th>
          <th>supprimer</th>
          <th>modifier</th>
        </tr>
      </thead>
      <tbody>
        @foreach($machines as $machine)
        <tr>
          <td>{{ $machine->id }}</td>
          <td>{{ $machine->reference }}</td>
          <td>{{ $machine->marque }}</td>
          <td>{{ $machine->dateAchat }}</td>
          <td>{{ $machine->prix }}</td>
          <td>{{ $machine->salleid }}</td>
          <td>
            <form method="GET" action="{{ route('machines.edit', $machine->id) }}">
              @csrf
              <!-- <button type="submit" class="btn btn-info btn-sm">Modifier</button> -->
              <a href="{{ route('machines.edit', $machine->id) }}" class="btn btn-info btn-sm">Modifier</a>
            </form>
          </td>
          <td>
            <form method="POST" action="{{ route('machines.destroy', $machine->id) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row mt-5">
      <div class="col-md-6">
        <!-- <button class="btn btn-success" id="btnAjouter">Ajouter</button> -->
        <a href="{{ route('machines.create') }}" class="btn btn-success" id="btnAjouter">Ajouter machine</a>
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

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#machine-table').DataTable();
    });

    $('#btnAjouter').on('click', function() {
      // Ajouter ici le code pour afficher le formulaire d'ajout
      alert('Veuillez remplir le formulaire dajout');
    });

    $('#btnSupprimerTout').on('click', function() {
      // Ajouter ici le code pour supprimer toutes les machines
      alert('Supprimer toutes les machines');
    });
  </script>
</body>
</html>