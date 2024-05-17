<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Coordenador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-responsive {
            max-height: 500px; /* Defina a altura máxima desejada */
            overflow: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Aplicação Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Início</a>
                </li>
                <!-- Adicionar mais links de navegação, se necessário -->
            </ul>
            <div class="user-info">
                <span class="text-white">Coordenador</span>
            </div>
        </div>
    </nav>

    <main>
        <div class="container my-5">
            <h2 class="text-center mb-4">Gerenciamento de Coordenadores</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="coordinatorTable">
                        <!-- Linhas de coordenadores carregadas dinamicamente via JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Dados de exemplo para coordenadores
        const coordinators = [
            { name: 'João Silva', email: 'joao.silva@instituicao.edu' },
            { name: 'Maria Santos', email: 'maria.santos@instituicao.edu' },
            { name: 'Pedro Oliveira', email: 'pedro.oliveira@instituicao.edu' },
            // Adicione mais coordenadores conforme necessário
        ];

        // Função para gerar as linhas da tabela de coordenadores
        function generateCoordinatorRows(coordinators) {
            let rowsHtml = '';
            coordinators.forEach(coordinator => {
                rowsHtml += `
                    <tr>
                        <td>${coordinator.name}</td>
                        <td>${coordinator.email}</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Remover</button>
                        </td>
                    </tr>
                `;
            });
            return rowsHtml;
        }

        // Carregar as linhas de coordenadores na tabela
        const coordinatorTable = document.querySelector('#coordinatorTable');
        coordinatorTable.innerHTML = generateCoordinatorRows(coordinators);
    </script>
</body>
</html>