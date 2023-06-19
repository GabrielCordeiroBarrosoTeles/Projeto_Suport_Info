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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Exibir</title>
    <style>
         .concluido{
            background: blue;
            color:white; 
        }
        .aberto{
            background: red;
            color:white; 
        }
       
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
    <?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do aluno
                        </h4>
                    </div>
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-striped" id="example" style="align-items: center;text-align: center;">
                            <thead style="align-items: center;text-align: center;">
                                <tr style="align-items: center;text-align: center;">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>OBS</th>
                                    <th>Departamento</th>
                                    <th>Estado</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody style="align-items: center;text-align: center;">
                                <?php 
                                    $query = "SELECT * FROM ocorrencia";
                                    $query_run = mysqli_query($mysqli, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $dado)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $dado['id']; ?></td>
                                                <td><?= $dado['nome']; ?></td>
                                                <td><?= $dado['observacao_cliente']; ?></td>
                                                <td><?= $dado['dep']; ?></td>
                                                <td><?= $dado['data']; ?></td>
                                                <td>
                                                    <?php 
                                                        if($dado['estado'] =="Concluido"){echo '<div class="concluido">' .$dado['estado'].'</div>';}
                                                        else  if($dado['estado'] =="Aberto"){ echo '<div class="aberto">' .$dado['estado'].'</div>';}
                                                    ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else{echo "<h5> Nenhum aluno cadastrado </h5>";}
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