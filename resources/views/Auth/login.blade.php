<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Mon Application</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="auth-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="auth-card card animate__animated animate__fadeIn">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">Connexion</h2>
                            <p class="text-muted">Connectez-vous à votre compte</p>
                        </div>

                        <!-- Formulaire de connexion -->
                        <form method="POST" action="/login" class="mb-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" name="email" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Se connecter</button>
                        </form>

                        <div class="divider-with-text my-4">
                            <span class="divider-text">OU</span>
                        </div>

                        <!-- Boutons d'authentification sociale -->
                        <div class="social-auth-buttons">
                            <a href="/auth/google" class="btn btn-outline-danger btn-social mb-3">
                                <i class="fab fa-google me-2"></i> Se connecter avec Google
                            </a>
                            <a href="/auth/facebook" class="btn btn-outline-primary btn-social mb-3">
                                <i class="fab fa-facebook-f me-2"></i> Se connecter avec Facebook
                            </a>
                            <a href="/auth/github" class="btn btn-outline-dark btn-social">
                                <i class="fab fa-github me-2"></i> Se connecter avec GitHub
                            </a>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">Pas encore de compte ? <a href="/register.html" class="text-decoration-none fw-bold">S'inscrire</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/js/main.js"></script>
</body>
</html>
