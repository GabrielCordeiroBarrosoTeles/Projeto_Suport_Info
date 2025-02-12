
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
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    
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
    <title>Funcionario Edit</title>
</head>
<body>
<?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Funcionario 
                            <a href="exibir_func.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $support_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                            $query = "SELECT * FROM funcionarios WHERE id='$support_id' ";
                            $query_run = mysqli_query($mysqli, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $support = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="support_id" value="<?= $support['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nome:</label>
                                        <input type="text" name="nome" value="<?=$support['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CPF:</label>
                                        <input type="text" name="cpf" value="<?=$support['cpf'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" name="email" value="<?=$support['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Setor:</label>
                                        <input type="text" name="setor" value="<?=$support['setor'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantidade de ocorrências em aberto para esse funcionário:</label>
                                        <div class="form-control" style="background-color: #e9ecef;" readonly>
                                            <?php
                                                $func_id = $support['id'];
                                                $ocorrencia_query = "SELECT COUNT(*) as ocorrencia_count 
                                                                     FROM ocorrencia 
                                                                     WHERE responsavel = $func_id 
                                                                     AND estado = 'aberto'";
                                                
                                                $ocorrencia_result = mysqli_query($mysqli, $ocorrencia_query);
                                                $ocorrencia_data = mysqli_fetch_assoc($ocorrencia_result);
                                                echo $ocorrencia_data['ocorrencia_count'];
                                            ?>
                                        </div>
                                    </div>
                                   
                                    <div class="mb-3">
                                        <button type="submit" name="update_func" class="btn btn-primary">
                                            Atualizar Funcionario
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
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