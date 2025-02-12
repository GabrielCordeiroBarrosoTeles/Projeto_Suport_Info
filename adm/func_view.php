<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #E7DFDD;
            border-radius: 30px;
        }
        ::-webkit-scrollbar-thumb {
            background: #000000;
            border-radius: 30px;
        }
    </style>
    <title>Detalhes do Funcionario</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Dados do Funcionario
                        <a href="exibir_func.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $support_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                        $query = "SELECT * FROM funcionarios WHERE id='$support_id' ";
                        $query_run = mysqli_query($mysqli, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $support = mysqli_fetch_array($query_run);
                            ?>
                            <div class="mb-3">
                                <label>Nome:</label>
                                <p class="form-control">
                                    <?= $support['nome']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>CPF:</label>
                                <p class="form-control">
                                    <?= preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "$1.$2.$3-$4", $support['cpf']); ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Email:</label>
                                <p class="form-control">
                                    <?= $support['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Setor:</label>
                                <p class="form-control">
                                    <?= $support['setor']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Ocorrências</label>
                                <select id="ocorrencias" class="form-control">
                                    <option value="">Selecione uma ocorrência</option>
                                    <?php
                                    $ocorrencias_query = "SELECT ocorrencia.* 
                                        FROM ocorrencia 
                                        JOIN funcionarios ON ocorrencia.responsavel = funcionarios.id
                                        WHERE funcionarios.id = '$support_id';
                                        ;
                                                            ";
                                    $ocorrencias_run = mysqli_query($mysqli, $ocorrencias_query);
                                    if (mysqli_num_rows($ocorrencias_run) > 0) {
                                        while ($ocorrencia = mysqli_fetch_array($ocorrencias_run)) {
                                            echo "<option value='" . $ocorrencia['id'] . "'>" . $ocorrencia['id'] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Nenhuma ocorrência encontrada</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div id="ocorrencia-detalhes" class="mt-3"></div>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#ocorrencias').change(function () {
            var ocorrenciaId = $(this).val();
            if (ocorrenciaId) {
                $.ajax({
                    url: 'get_ocorrencia_detalhes.php',
                    type: 'GET',
                    data: {id: ocorrenciaId},
                    success: function (response) {
                        $('#ocorrencia-detalhes').html(response);
                    }
                });
            } else {
                $('#ocorrencia-detalhes').html('');
            }
        });
    });
</script>
</body>
</html>