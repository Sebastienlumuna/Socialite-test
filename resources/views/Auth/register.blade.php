<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | Mon Application</title>
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
                            <h2 class="fw-bold">Inscription</h2>
                            <p class="text-muted">Créez un nouveau compte</p>
                        </div>

                        <!-- Formulaire d'inscription -->
                        <form method="POST" action="/register" class="mb-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">S'inscrire</button>
                        </form>

                        <div class="divider-with-text my-4">
                            <span class="divider-text">OU</span>
                        </div>

                        <!-- Boutons d'authentification sociale -->
                        <div class="social-auth-buttons">
                            <a href="/auth/google" class="btn btn-outline-danger btn-social mb-3">
                                <i class="fab fa-google me-2"></i> S'inscrire avec Google
                            </a>
                            <a href="/auth/facebook" class="btn btn-outline-primary btn-social mb-3">
                                <i class="fab fa-facebook-f me-2"></i> S'inscrire avec Facebook
                            </a>
                            <a href="/auth/github" class="btn btn-outline-dark btn-social">
                                <i class="fab fa-github me-2"></i> S'inscrire avec GitHub
                            </a>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">Déjà un compte ? <a href="/login.html" class="text-decoration-none fw-bold">Se connecter</a></p>
                        </div>
                    </div>
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
