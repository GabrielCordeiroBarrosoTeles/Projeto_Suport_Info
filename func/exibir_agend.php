<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exibir</title>
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
            background-color:rgba(255, 0, 0, 0.8);
            color: white;
        }
        
        .week-date {
            background-color: yellow;
        }
        
        .far-date {
            background-color: green;
            color: white;
        }
        
        .ball {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
            vertical-align: middle;
        }
        .ball.near-date {
            background-color: red;
        }
        .ball.week-date {
            background-color: yellow;
        }
        .ball.far-date {
            background-color: green;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do agendamento</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped" id="example">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Data</th>
                                    <th>Mensagem</th>
                                    <th>Visualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM agendamento";
                                $query_run = mysqli_query($mysqli, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                        $date = $student['data'];
                                        $formattedDate = date('d/m/Y', strtotime($date));
                                        $currentDate = date('Y-m-d');
                                        $dateDiff = strtotime($date) - strtotime($currentDate);
                                        $daysDiff = round($dateDiff / (60 * 60 * 24));

                                        $class = '';
                                        if ($daysDiff <= 0) {
                                            $class = 'near-date';
                                        } elseif ($daysDiff <= 7) {
                                            $class = 'week-date';
                                        } else {
                                            $class = 'far-date';
                                        }
                                        ?>
                                        <tr >
                                            <td class="<?= $class ?>">
                                                <span class="ball <?= $class ?>"></span>
                                            </td>
                                            <td><?= $student['nome']; ?></td>
                                            <td><?= $student['email']; ?></td>
                                            <td><?= $student['endereco']; ?></td>
                                            <td><?= $formattedDate; ?></td>
                                            <td><?= $student['mensagem']; ?></td>
                                            <td>
                                                <a href="agend_view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum aluno cadastrado </h5>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Datatables-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <!--Termino Datatables-->
</body>
</html>
