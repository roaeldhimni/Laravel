<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des utilisateurs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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
        <br><br>
  <div class="container">
    <h1 class="text-center my-5">Liste des utilisateurs authentifiés:</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="bg-secondary text-light">id</th>
          <th class="bg-secondary text-light">username</th>
          <th class="bg-secondary text-light">email</th>
          <th class="bg-secondary text-light">Activer</th>
          <th class="bg-secondary text-light">Désactiver</th>
          <th class="bg-secondary text-light">Supprimer</th>

        </tr>
      </thead>
      <tbody>
      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>
           <form method="POST" action="{{ route('user.activer', $user->id) }}">
              @csrf
               @method('PUT') 
              <button type="submit" class="btn btn-success " id="supp">Activer</button>
            </form> 
          </td>
          <td>
            <form method="POST" action="{{ route('user.desactiver', $user->id) }}">
              @csrf
              @method('PUT')
              <button type="submit" class="btn btn-primary " id="supp">désactiver</button>
            </form>
          </td>

          <!-- <td><a href="{{ route('user.desactiver', $user->id) }}" class="btn btn-secondary">Desactiver</a></td> -->
          <td>
            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger " id="supp">Supprimer</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center my-5">
    <!-- <button type="button" class="btn btn-success my-btn">Créer des utilisateurs</button> -->
    <a href="{{ route('user.create') }}" class="btn btn-success my-btn"> Créer un administrateur</a>
    </div>
    <style>
  .my-btn {
    /* background-color: #007bff; */
    border-color: #007bff;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    padding: 12px 30px;
    border-radius: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .my-btn:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.2);
    z-index: -1;
    transition: all 0.3s ease;
    transform: scaleX(0);
    transform-origin: left;
  }

  .my-btn:hover:before {
    transform: scaleX(1);
  }

  .my-btn:hover {
    background-color: #006400;;
    border-color: #0062cc;
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
    transform: translateY(-2px);
  }

  .my-btn:active {
    background-color: #006400;

    border-color: #005cbf;
    box-shadow: none;
    transform: translateY(0);
  }
</style>




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
</html>