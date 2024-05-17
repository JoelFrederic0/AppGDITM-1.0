<?php include("../../templates/header.php"); ?>

<br />
<div class="card">
    <div class="card-header">
        <!-- Link para a página create.php para adicionar um novo registro -->
        <a name="" id="" class="btn btn-primary" href="create.php" role="button">Adicionar Registo</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table" id="tabla_id">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome de Departamento</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>