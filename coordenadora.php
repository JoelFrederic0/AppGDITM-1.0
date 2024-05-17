<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área da Coordenadora</title>
    <!-- Adicionando o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Seus estilos CSS personalizados -->
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff !important;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff !important;
            font-weight: bold;
        }

        .container {
            margin-top: 30px;
        }

        .jumbotron {
            background-color: #ffffff;
            padding: 2rem 1rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            color: #007bff;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Aplicação Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="eng_informatica.php">Engenharia Informática</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Multimedia.php">Multimédia</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    <div class="jumbotron">
        <h1 class="display-4">Bem-vindo, Coordenadora!</h1>
        <p class="lead">Esta é a sua área de trabalho.</p>
    </div>
</main>

<footer class="footer">
    <div class="container text-center">
        <p>&copy; 2024 Grupo Disciplinar de Informática, Tecnologias e Multimédia. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Adicionando os scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
