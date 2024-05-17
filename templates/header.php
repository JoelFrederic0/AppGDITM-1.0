<?php
$url_base = "http://localhost/AppGDITM/"; // Define a URL base do aplicativo
// Verifica se o utilizador está autenticado, se não estiver, redireciona para a página de login
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Web - Grupo Disciplinar de Informática</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Navbar */
        .navbar {
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 10px;
        }

        /* Rodapé */
        footer {
            margin-top: 20px;
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }

        footer h5 {
            color: #ffffff;
        }

        footer a {
            color: #ffffff;
        }

        footer a:hover {
            color: #cccccc;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="nav-link" href="<?php echo $url_base; ?>./">
                <img src="/AppGDITM1/templates/logoGDITM.png" alt="GDITM" style="max-width: 150px; height: 39px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base; ?>pages/contactos">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base; ?>pages/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base; ?>pages/cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base; ?>pages/investigacao">Investigação</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>