<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "database.php"; // Inclui o arquivo de conexão com o banco de dados

    // Recebe os dados do formulário
    $nome_estudante = isset($_POST['nome_estudante']) ? $_POST['nome_estudante'] : '';
    $email_estudante = isset($_POST['email_estudante']) ? $_POST['email_estudante'] : '';
    $senha_estudante = isset($_POST['senha_estudante']) ? $_POST['senha_estudante'] : ''; // Lembre-se de tratar a senha de forma segura

    // Insere os dados na tabela de estudante
    $sql = "INSERT INTO tbl_estudante (nome_estudante, email_estudante, senha) VALUES ('$nome_estudante', '$email_estudante', '$senha_estudante')";

    if ($conexion->query($sql) === TRUE) {
        // Redireciona de volta para a página eng_informatica.php após a inserção
        header("Location: eng_informatica.php#estudante");
        exit(); // Termina o script após o redirecionamento
    } else {
        echo "Erro ao criar novo estudante: " . $conexion->error;
    }

    // Fecha a conexão
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engenharia Informática</title>
    <!-- Adicionando o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Seus estilos CSS personalizados -->
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #007bff !important;
        }
        .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Engenharia Informática</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="eng_informatica.php#estudante">Estudante</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="eng_informatica.php#disciplinas">Disciplinas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="eng_informatica.php#professores">Professores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <!-- Seção de Criação de Estudante -->
        <section id="estudante" class="my-4">
            <h2 class="mb-4">Criar Novo Estudante</h2>
            <div class="card">
                <div class="card-body">
                    <form action="eng_informatica.php" method="post">
                        <div class="form-group">
                            <label for="nome_estudante">Nome:</label>
                            <input type="text" id="nome_estudante" name="nome_estudante" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email_estudante">E-mail:</label>
                            <input type="email" id="email_estudante" name="email_estudante" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="senha_estudante">Senha:</label>
                            <input type="password" id="senha_estudante" name="senha_estudante" class="form-control" required>
                        </div>
                        <!-- Adicione mais campos conforme necessário -->
                        <button type="submit" class="btn btn-primary">Criar Estudante</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Seção de Lista de Estudante -->
        <!-- Seção de Lista de Estudante -->
<section id="estudante-lista" class="my-4">
    <h2 class="mb-4">Lista de Estudantes</h2>
    <div class="card">
        <div class="card-body">
            <?php
            // Agora, vamos buscar os estudantes do banco de dados
            include "database.php"; // Inclui novamente o arquivo de conexão com o banco de dados

            // Consulta para obter os estudantes
            $sql = "SELECT * FROM tbl_estudante";
            $result = $conexion->query($sql);

            // Verifica se há registros retornados
            if ($result->num_rows > 0) {
                // Exibe os estudantes em uma tabela
                echo '<div class="table-responsive">';
                echo '<table class="table table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nome</th>';
                echo '<th>Email</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome_estudante'] . '</td>';
                    echo '<td>' . $row['email_estudante'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo '<p>Nenhum estudante encontrado.</p>';
            }
            ?>
        </div>
    </div>
</section>


        <!-- Restante do seu HTML continua aqui -->

    </main>

    <!-- Adicionando os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
