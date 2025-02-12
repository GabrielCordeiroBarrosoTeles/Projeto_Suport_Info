<?php require 'dbcon.php'; ?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Detalhes do cliente</title>
    <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: #E7DFDD;
                border-radius: 30px;
            }::-webkit-scrollbar-thumb{
                background: #000000;
                border-radius: 30px;
            }
        </style>
</head>
<body>
<?php include './includes/navbar_modal.php'; ?><!--Navbar-->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Dados do Ocorrencia
                        <a href="ocorrencia_view.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $support_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                        $query = "SELECT o.*, f.nome AS nome_responsavel, c.nome AS cliente_nome
                                    FROM ocorrencia o
                                    LEFT JOIN funcionarios f ON o.responsavel = f.id
                                    LEFT JOIN cliente c ON o.cliente_id = c.id
                                    WHERE o.id = '$support_id'";
                        $query_run = mysqli_query($mysqli, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $support = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id" value="<?= $support['id']; ?>">

                                <div class="mb-3">
                                    <label>Nome do Cliente</label>
                                    <p class="form-control">
                                    <?= htmlspecialchars($support['cliente_nome']); ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Descrição do Problema</label>
                                    <p class="form-control">
                                        <?= $support['descricao_problema']; ?>
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    <label>Estado</label>
                                    <p class="form-control">
                                    <?= $support['estado']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Data</label>
                                    <p class="form-control">
                                        <?= date('d/m/Y', strtotime($support['data'])); ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Responsável</label>
                                    <p class="form-control">
                                    <?= htmlspecialchars($support['nome_responsavel'] ?? "Não definido"); ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Prioridade</label>
                                    <p class="form-control">
                                        <?= $support['prioridade']; ?>
                                    </p>
                                </div>
                                
                            </form>
                            <?php
                        } else {
                            echo "<h4>Nenhum ID encontrado</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
