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
    <title>Ocorrencia</title>
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
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do cliente
                            
                        </h4>
                    </div>
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-striped" id="example" style="align-items: center;text-align: center;">
                            <thead style="align-items: center;text-align: center;">
                                <tr style="align-items: center;text-align: center;">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>OBS</th>
                                    <th>Dep</th>
                                    <th>Estado</th>
                                    <th>Data</th>
                                    <th>Atender</th>
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
                                                <td>
                                                    <a href="ocor_view.php?id=<?= $dado['id']; ?>">
                                                        <button type="button" class="btn btn-primary" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index" viewBox="0 0 16 16">
                                                                <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435a4.9 4.9 0 0 1 .106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
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