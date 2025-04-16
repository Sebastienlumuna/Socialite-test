<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord | Mon Application</title>
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
                <h4 class="m-0">Mon App</h4>
                <button class="btn btn-sm btn-outline-light d-lg-none" id="sidebarToggle">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="sidebar-user p-3 text-center">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random" alt="User" class="rounded-circle mb-2" width="80">
                <h5 class="m-0">{{ Auth::user()->name }}</h5>
                <small class="text-muted">{{ Auth::user()->email }}</small>
            </div>
            <ul class="sidebar-menu list-unstyled p-0 m-0">
                <li class="menu-item active">
                    <a href="{{ route('dashboard') }}" class="d-block p-3">
                        <i class="fas fa-home me-2"></i> Accueil
                    </a>
                </li>
                <li class="menu-item">
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
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random" alt="User" width="32" height="32" class="rounded-circle me-2">
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
                    <h2 class="fw-bold">Tableau de bord</h2>
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-uppercase">Utilisateurs</h6>
                                        <h3 class="mb-0">1,254</h3>
                                    </div>
                                    <i class="fas fa-users fa-2x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-uppercase">Revenus</h6>
                                        <h3 class="mb-0">$8,520</h3>
                                    </div>
                                    <i class="fas fa-dollar-sign fa-2x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-uppercase">Tâches</h6>
                                        <h3 class="mb-0">42</h3>
                                    </div>
                                    <i class="fas fa-tasks fa-2x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-uppercase">Performances</h6>
                                        <h3 class="mb-0">92%</h3>
                                    </div>
                                    <i class="fas fa-chart-line fa-2x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Welcome Message -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Bienvenue, {{ Auth::user()->name }} !</h4>
                        <p class="card-text">Vous êtes connecté à votre tableau de bord. Voici un aperçu de vos activités récentes et statistiques.</p>
                        <a href="#" class="btn btn-primary">Commencer</a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Activité récente</h5>
                            </div>
                            <div class="card-body">
                                <div class="activity-list">
                                    @foreach($activities as $activity)
                                    <div class="activity-item d-flex mb-3">
                                        <div class="activity-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-user-plus"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Nouvel utilisateur inscrit</h6>
                                            <p class="text-muted mb-0">Jane Doe s'est inscrite via Google</p>
                                            <small class="text-muted">Il y a 2 heures</small>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex mb-3">
                                        <div class="activity-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-credit-card"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Paiement reçu</h6>
                                            <p class="text-muted mb-0">Paiement de $129.99 de la part de Robert Johnson</p>
                                            <small class="text-muted">Aujourd'hui, 10:45</small>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex mb-3">
                                        <div class="activity-icon bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-ticket-alt"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Nouveau ticket de support</h6>
                                            <p class="text-muted mb-0">Ticket #4587 créé par Sarah Williams</p>
                                            <small class="text-muted">Hier, 18:30</small>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex">
                                        <div class="activity-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Mise à jour du système</h6>
                                            <p class="text-muted mb-0">Version 2.3.0 déployée avec succès</p>
                                            <small class="text-muted">Hier, 14:15</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Méthodes de connexion</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fab fa-google fa-2x text-danger"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">{{ $connection->name }}</h6>
                                        <small class="text-muted">{{ $connection->status }}</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fab fa-github fa-2x text-dark"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">GitHub</h6>
                                        <small class="text-muted">Non connecté</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="fab fa-facebook fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Facebook</h6>
                                        <small class="text-muted">Non connecté</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
