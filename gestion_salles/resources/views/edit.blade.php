<!-- resources/views/machines/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
    </script>
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
<div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header bg-primary text-white">Modifier Machine</div> -->
                    <div class="card-header bg-danger text-white">
                        <h3 class="card-title mb-0">Modifier la machine</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('machines.update', $machine->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="reference" class="col-md-4 col-form-label text-md-right">{{ __('Reference') }}</label>

                                <div class="col-md-6">
                                    <input id="reference" type="text" class="form-control @error('reference') is-invalid @enderror" name="reference" value="{{ old('reference', $machine->reference) }}" required autocomplete="reference" autofocus>

                                    @error('reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="marque" class="col-md-4 col-form-label text-md-right">{{ __('Marque') }}</label>

                                <div class="col-md-6">
                                    <input id="marque" type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque', $machine->marque) }}" required autocomplete="marque" autofocus>

                                    @error('marque')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dateAchat" class="col-md-4 col-form-label text-md-right">{{ __('Date Achat') }}</label>

                                <div class="col-md-6">
                                    <input id="dateAchat" type="text" class="form-control @error('dateAchat') is-invalid @enderror" name="dateAchat" value="{{ old('dateAchat', $machine->dateAchat) }}" required autocomplete="dateAchat" autofocus>

                                    @error('dateAchat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix', $machine->prix) }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="salleid" class="col-md-4 col-form-label text-md-right">{{ __('Salle Id') }}</label>

                                <div class="col-md-6">
                                    <input id="salleid" type="text" class="form-control @error('salleid') is-invalid @enderror" name="salleid" value="{{ old('salleid', $machine->salleid) }}" required autocomplete="salleid" autofocus>

                                    @error('salleid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('machines.indexm') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
</html>
    
