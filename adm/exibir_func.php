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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exibir</title>
</head>
<body>
    <?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do funcionario
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary float-end">Adicionar Funcionario</a>
                        </h4>
                    </div>
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-striped" id="example" style="align-items: center;text-align: center;">
                            <thead style="align-items: center;text-align: center;">
                                <tr style="align-items: center;text-align: center;">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Email</th>
                                    <th>Setor</th>
                                    <th>Departamento</th>
                                    <th>Visualizar</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>

                                </tr>
                            </thead>
                            <tbody style="align-items: center;text-align: center;">
                                <?php 
                                    $query = "SELECT * FROM funcionarios";
                                    $query_run = mysqli_query($mysqli, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['nome']; ?></td>
                                                <td><?= $student['cpf']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['setor']; ?></td>
                                                <td><?= $student['departamento']; ?></td>
                                                <td>
                                                    <a href="func_view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                </td>
                                                <td> 
                                                    <a href="func_edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                </td>
                                                <td> 
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_func" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Nenhum func cadastrado </h5>";
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