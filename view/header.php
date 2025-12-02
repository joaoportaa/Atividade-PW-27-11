<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnFlow</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Nosso CSS Bonitinho -->
    <link rel="stylesheet" href="/learnflow/public/css/style.css">
    
    <style>
        /* CSS inline para garantir funcionamento */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .spacer {
            height: 80px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/learnflow/home">
                <i class="fas fa-graduation-cap"></i> LearnFlow
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/learnflow/home">
                        <i class="fas fa-home"></i> Home
                    </a>
                    
                    <?php if(isset($_SESSION['usuario_id'])): ?>
                        <a class="nav-link" href="/learnflow/perfil">
                            <i class="fas fa-user"></i> Meu Perfil
                        </a>
                        <a class="nav-link" href="/learnflow/auth/logout">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    <?php else: ?>
                        <a class="nav-link" href="/learnflow/auth/login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a class="nav-link" href="/learnflow/auth/cadastro">
                            <i class="fas fa-user-plus"></i> Cadastrar
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Espaço para navbar fixa -->
    <div class="spacer"></div>
    
    <div class="container">