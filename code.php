<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_cliente'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['delete_cliente']);

    $query = "DELETE FROM cliente WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cliente excluído com sucesso";
    } else {
        $_SESSION['message'] = "Não foi possível excluir o cliente";
    }

    header("Location: exibir.php");
    exit(0);
}

if (isset($_POST['update_cliente'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['student_id']);
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);

    $query = "UPDATE cliente SET nome='$nome', cpf='$cpf' WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cliente atualizado com sucesso";
    } else {
        $_SESSION['message'] = "Cliente não atualizado";
    }

    header("Location: exibir.php");
    exit(0);
}

if (isset($_POST['save_agend'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
    $data = mysqli_real_escape_string($mysqli, $_POST['data']);
    $mensagem = mysqli_real_escape_string($mysqli, $_POST['mensagem']);    

    $query = "INSERT INTO agendamento (nome, email,endereco, data, mensagem) VALUES ('$nome', '$email','$endereco', '$data', '$mensagem')";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "Agendado com sucesso!";
    } else {
        $_SESSION['message'] = "Não foi possível agendar.";
    }

    header("Location: index.php");
    exit(0);
}


if (isset($_POST['save_ocorrncia'])) {
    $nome =  mysqli_real_escape_string($mysqli, $_POST['nome']);
    $obs =  mysqli_real_escape_string($mysqli, $_POST['observacao_cliente']);
    $dep = mysqli_real_escape_string($mysqli, $_POST['dep']);
    $data = mysqli_real_escape_string($mysqli, $_POST['data']);

    $query = "INSERT INTO `ocorrencia`(`id`, `nome`, `observacao_cliente`, `dep`, `estado`, `data`) VALUES(0,'$nome','$obs','$dep','Aberto','$data')";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cliente cadastrado com sucesso!";
    } else {
        $_SESSION['message'] = "Cliente não cadastrado";
    }

    header("Location: index.php");
    exit(0);
}
?>
