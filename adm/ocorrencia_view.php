<<<<<<< HEAD
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
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .ball {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        .red {
            background-color: red;
        }
        .yellow {
            background-color: yellow;
        }
        .blue {
            background-color: blue;
        }
        </style>
</head>
<body>
    <?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes das ocorrências</h4>
                    </div>
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-striped" id="example" style="align-items: center;text-align: center;">
                            <thead style="align-items: center;text-align: center;">
                                <tr style="align-items: center;text-align: center;">
                                    <th>ID</th>
                                    <th>Prioridade</th>
                                    <th>Nome do Cliente</th>
                                    <th>Responsavel</th>
                                    <th>Data</th>
                                    <th>Estado</th>
                                    <th>Visualizar</th>
                                </tr>
                            </thead>
                            <tbody style="align-items: center;text-align: center;">
                                <?php 
                                    $query = "SELECT o.id, o.prioridade, o.setor, o.data, o.estado, f.nome AS nome_responsavel, c.nome AS cliente_nome
                                                FROM ocorrencia o
                                                JOIN funcionarios f ON o.responsavel = f.id
                                                JOIN cliente c ON o.cliente_id = c.id"; 
                                                                
                          
                                    $query_run = mysqli_query($mysqli, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $dado)
                                        {
                                            ?>
                                            <tr>
                                                
                                                <td><?= $dado['id']; ?></td> <td>
                                                    <?php 
                                                    $prioridade = $dado['prioridade'];
                                                    $colorClass = '';
                                                    if ($prioridade == 'alta') {
                                                        $colorClass = 'red';
                                                    } elseif ($prioridade == 'media') {
                                                        $colorClass = 'yellow';
                                                    } elseif ($prioridade == 'baixa') {
                                                        $colorClass = 'blue';
                                                    }
                                                    ?>
                                                    <div class="ball <?= $colorClass; ?>"></div>
                                                </td>
                                                <td><?= $dado['cliente_nome']; ?></td>
                                                <td><?= htmlspecialchars($dado['nome_responsavel'] ?? "Não definido"); ?></td>
                                                <td><?= date('d/m/Y', strtotime($dado['data'])); ?></td>
                                                <td>
                                                    <?php 
                                                        if($dado['estado'] == 'concluido'){echo "<div class='concluido'>Concluído</div>";}
                                                        else  if($dado['estado'] == 'aberto'){ echo "<div class='aberto'>Aberto</div>";}
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="ocor_view.php?id=<?= $dado['id']; ?>">
                                                        <button type="button" class="btn btn-primary" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill text-light" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                            </svg>
                                                        </button>
                                                    </a>                                               
                                                </td>
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
=======
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
                                                        if($dado['estado'] ==1){echo "<div class='concluido'> Concluido</div>";}
                                                        else  if($dado['estado'] ==0){ echo "<div class='aberto'>Aberto</div>";}
                                                    ?>
                                                </td>                   
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
>>>>>>> 8f881a8078d32d316e911031fe587b5662428224
