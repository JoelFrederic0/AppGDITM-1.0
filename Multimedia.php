<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimédia</title>
    <!-- Adicionando o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Seus estilos CSS personalizados -->
    <style>
        /* Adicione seus estilos personalizados aqui */
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Multimédia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="multimedia.php#estudantes">Estudantes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="multimedia.php#disciplinas">Disciplinas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="multimedia.php#professores">Professores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <!-- Seção de Criação de Estudantes -->
        <section id="estudantes" class="my-4">
            <h2>Criar Novo Estudante</h2>
            <div class="card">
                <div class="card-body">
                    <form action="processar_estudante.php" method="post">
                        <div class="form-group">
                            <label for="nome_estudante">Nome:</label>
                            <input type="text" id="nome_estudante" name="nome_estudante" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email_estudante">E-mail:</label>
                            <input type="email" id="email_estudante" name="email_estudante" class="form-control" required>
                        </div>
                        <!-- Adicione mais campos conforme necessário -->
                        <button type="submit" class="btn btn-primary">Criar Estudante</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Seção de Lista de Estudantes -->
        <section id="estudantes" class="my-4">
            <h2>Estudantes</h2>
            <div class="card">
                <div class="card-body">
                    <!-- Lista de estudantes (adicione dinamicamente conforme necessário) -->
                </div>
            </div>
        </section>

        <!-- Seção de Criação de Disciplinas -->
        <section id="disciplinas" class="my-4">
            <h2>Criar Nova Disciplina</h2>
            <div class="card">
                <div class="card-body">
                    <form action="processar_disciplina.php" method="post">
                        <div class="form-group">
                            <label for="nome_disciplina">Nome:</label>
                            <input type="text" id="nome_disciplina" name="nome_disciplina" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="codigo_disciplina">Código:</label>
                            <input type="text" id="codigo_disciplina" name="codigo_disciplina" class="form-control" required>
                        </div>
                        <!-- Adicione mais campos conforme necessário -->
                        <button type="submit" class="btn btn-primary">Criar Disciplina</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Seção de Lista de Disciplinas -->
        <section id="disciplinas" class="my-4">
            <h2>Disciplinas</h2>
            <div class="card">
                <div class="card-body">
                    <!-- Lista de disciplinas (adicione dinamicamente conforme necessário) -->
                </div>
            </div>
        </section>

        <!-- Seção de Criação de Professores -->
        <section id="professores" class="my-4">
            <h2>Criar Novo Professor</h2>
            <div class="card">
                <div class="card-body">
                    <form action="processar_professor.php" method="post">
                        <div class="form-group">
                            <label for="nome_professor">Nome:</label>
                            <input type="text" id="nome_professor" name="nome_professor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email_professor">E-mail:</label>
                            <input type="email" id="email_professor" name="email_professor" class="form-control" required>
                        </div>
                        <!-- Adicione mais campos conforme necessário -->
                        <button type="submit" class="btn btn-primary">Criar Professor</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Seção de Lista de Professores -->
        <section id="professores" class="my-4">
            <h2>Professores</h2>
            <div class="card">
                <div class="card-body">
                    <!-- Lista de professores (adicione dinamicamente conforme necessário) -->
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4 mt-4">
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
