<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | {{ config('app.name') }}</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="dashboard-page">
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-dark text-white" id="sidebar">
            <div class="sidebar-header p-3 d-flex justify-content-between align-items-center">
                <h4 class="m-0">{{ config('app.name') }}</h4>
                <button class="btn btn-sm btn-outline-light d-lg-none" id="sidebarToggle">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="sidebar-user p-3 text-center">
                <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" alt="User" class="rounded-circle mb-2" width="80">
                <h5 class="m-0">{{ Auth::user()->name }}</h5>
                <small class="text-muted">{{ Auth::user()->email }}</small>
            </div>
            <ul class="sidebar-menu list-unstyled p-0 m-0">
                <li class="menu-item">
                    <a href="{{ route('dashboard') }}" class="d-block p-3">
                        <i class="fas fa-home me-2"></i> Accueil
                    </a>
                </li>
                <li class="menu-item active">
                    <a href="{{ route('profile') }}" class="d-block p-3">
                        <i class="fas fa-user me-2"></i> Profil
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('settings') }}" class="d-block p-3">
                        <i class="fas fa-cog me-2"></i> Paramètres
                    </a>
                </li>
                <li class="menu-item mt-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="d-block p-3" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Déconnexion
                        </a>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content w-100">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-sm btn-outline-secondary d-lg-none" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="d-flex align-items-center ms-auto">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" alt="User" width="32" height="32" class="rounded-circle me-2">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
                                <li><a class="dropdown-item" href="{{ route('settings') }}">Paramètres</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Déconnexion</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="container-fluid p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold">Profil Utilisateur</h2>
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">John Doe</h5>
                                <p class="text-muted mb-1">Utilisateur Premium</p>
                                <p class="text-muted mb-4">Paris, France</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                        <i class="fas fa-edit me-1"></i> Modifier
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fas fa-share-alt me-1"></i> Partager
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="mb-0">Connexions sociales</h5>
                                    <button class="btn btn-sm btn-outline-primary">Ajouter</button>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fab fa-google fa-2x text-danger"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Google</h6>
                                        <small class="text-muted">Connecté</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-danger">Déconnecter</button>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fab fa-github fa-2x text-dark"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">GitHub</h6>
                                        <small class="text-muted">Non connecté</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-secondary">Connecter</button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="fab fa-facebook fa-2x text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Facebook</h6>
                                        <small class="text-muted">Non connecté</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-secondary">Connecter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nom complet</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">John Doe</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">john.doe@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Téléphone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(123) 456-7890</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Adresse</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">123 Rue de Paris, 75000, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Informations de compte</h5>
                                        <p class="card-text">Dernière connexion: 12/04/2023 à 14:30</p>
                                        <p class="card-text">Date d'inscription: 15/01/2022</p>
                                        <p class="card-text">Statut: <span class="badge bg-success">Actif</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Sécurité</h5>
                                        <p class="card-text">Authentification à deux facteurs: <span class="text-{{ Auth::user()->two_factor_enabled ? 'success' : 'danger' }}">{{ Auth::user()->two_factor_enabled ? 'Activée' : 'Désactivée' }}</span></p>
                                        @if(Auth::user()->two_factor_enabled)
                                            <button class="btn btn-sm btn-outline-danger me-2">Désactiver 2FA</button>
                                        @else
                                            <button class="btn btn-sm btn-outline-primary me-2">Activer 2FA</button>
                                        @endif
                                        <button class="btn btn-sm btn-outline-secondary">Changer mot de passe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Modifier le profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="editName" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" value="john.doe@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="editPhone" value="(123) 456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="editAddress" class="form-label">Adresse</label>
                            <textarea class="form-control" id="editAddress" rows="2">123 Rue de Paris, 75000, France</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editAvatar" class="form-label">Photo de profil</label>
                            <input class="form-control" type="file" id="editAvatar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>
