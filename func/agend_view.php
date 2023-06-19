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

    <title>Detalhes do agendamento</title>
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

        .near-date {
            background-color: red;
            color: white;
        }

        .week-date {
            background-color: yellow;
        }

        .far-date {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
<?php include './includes/navbar_modal.php'?><!--Navbar-->
<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Dados do agendamento
                        <a href="exibir_agend.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                        $query = "SELECT * FROM agendamento WHERE id='$student_id' ";
                        $query_run = mysqli_query($mysqli, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);

                            $date = $student['data'];
                            $currentDate = date('Y-m-d');
                            $dateDiff = strtotime($date) - strtotime($currentDate);
                            $daysDiff = round($dateDiff / (60 * 60 * 24));

                            $inputClass = '';
                            if ($daysDiff < 0) {
                                $inputClass = 'near-date';
                            } elseif ($daysDiff <= 7) {
                                $inputClass = 'week-date';
                            } elseif ($daysDiff > 14) {
                                $inputClass = 'far-date';
                            }
                            ?>
                            <div class="mb-3">
                                <label>Nome</label>
                                <p class="form-control">
                                    <?= $student['nome']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <p class="form-control">
                                    <?= $student['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Endereço</label>
                                <p class="form-control">
                                    <?= $student['endereco']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Data</label>
                                <input type="text" class="form-control <?= $inputClass; ?>" value="<?= $student['data']; ?>" >
                            </div>
                            <div class="mb-3">
                                <label>Mensagem</label>
                                <p class="form-control">
                                    <?= $student['mensagem']; ?>
                                </p>
                            </div>
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
