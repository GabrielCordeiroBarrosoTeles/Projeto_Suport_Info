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
                        $student_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                        $query = "SELECT * FROM ocorrencia WHERE id='$student_id' ";
                        $query_run = mysqli_query($mysqli, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id" value="<?= $student['id']; ?>">

                                <div class="mb-3">
                                    <label>Nome</label>
                                    <p class="form-control">
                                        <?= $student['nome']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>OBS</label>
                                    <p class="form-control">
                                        <?= $student['observacao_cliente']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Departamento</label>
                                    <p class="form-control">
                                        <?= $student['dep']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Estado</label>
                                    <p class="form-control">
                                        <?php
                                        if ($student['estado'] == 1) {
                                            echo "Concluido";
                                        } else if ($student['estado'] == 0) {
                                            echo "Aberto";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Data</label>
                                    <p class="form-control">
                                        <?= $student['data']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_ocor_concluida" class="btn btn-primary">
                                        Concluir Atendimento
                                    </button>
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
