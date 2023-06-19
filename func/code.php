<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_cliente']))
{
    $student_id = mysqli_real_escape_string($mysqli, $_POST['delete_cliente']);

    $query = "DELETE FROM cliente WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if($query_run)
    {
        $_SESSION['message'] = "cliente excluido com sucesso";
        header("Location: exibir.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o cliente";
        header("Location: exibir.php");
        exit(0);
    }
}

if (isset($_POST['update_ocor_concluida'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $query = "UPDATE ocorrencia SET estado='1' WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cliente atualizado com sucesso";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Falha ao atualizar o cliente";
        header("Location: home.php");
        exit(0);
    }
}  
                        


if(isset($_POST['save_cliente']))
{
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    
    $query = "INSERT INTO cliente (nome,cpf) VALUES ('$nome','$cpf')";

    $query_run = mysqli_query($mysqli, $query);
    if($query_run)
    {
        $_SESSION['message'] = "cliente cadastrado com sucesso!";
        header("Location: exibir.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "cliente não cadastrado";
        header("Location: exibir.php");
        exit(0);
    }
}

?>