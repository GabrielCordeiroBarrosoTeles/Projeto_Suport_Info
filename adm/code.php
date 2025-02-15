
<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_cliente'])) {
    $support_id = mysqli_real_escape_string($mysqli, $_POST['delete_cliente']);

    $query = "DELETE FROM cliente WHERE id='$support_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "cliente excluído com sucesso";
        header("Location: exibir.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foi possível excluir o cliente";
        header("Location: exibir.php");
        exit(0);
    }
}

if (isset($_POST['delete_func'])) {
    $support_id = mysqli_real_escape_string($mysqli, $_POST['delete_func']);

    $query = "DELETE FROM funcionarios WHERE id='$support_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "funcionário excluído com sucesso";
        header("Location: exibir_func.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foi possível excluir o funcionário";
        header("Location: exibir_func.php");
        exit(0);
    }
}

if (isset($_POST['update_cliente'])) {
    $support_id = mysqli_real_escape_string($mysqli, $_POST['support_id']);

    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);

    $query = "UPDATE cliente SET nome='$nome', cpf='$cpf' WHERE id='$support_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "cliente atualizado com sucesso";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "cliente não atualizado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['update_func'])) {
    $support_id = mysqli_real_escape_string($mysqli, $_POST['support_id']);

    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $setor = mysqli_real_escape_string($mysqli, $_POST['setor']);
    $departamento = mysqli_real_escape_string($mysqli, $_POST['departamento']);

    $query = "UPDATE funcionarios SET nome='$nome', cpf='$cpf', email='$email', setor='$setor', departamento='$departamento' WHERE id='$support_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "funcionário atualizado com sucesso";
        header("Location: exibir_func.php");
        exit(0);
    } else {
        $_SESSION['message'] = "funcionário não atualizado";
        header("Location: exibir_func.php");
        exit(0);
    }
}

if (isset($_POST['save_cliente'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);

    $query = "INSERT INTO cliente (nome,cpf) VALUES ('$nome','$cpf')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "cliente cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "cliente não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['save_func'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $setor = mysqli_real_escape_string($mysqli, $_POST['setor']);
    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);

    $query = "INSERT INTO funcionarios (nome,cpf,email,setor,usuario_id) VALUES ('$nome','$cpf','$email','$setor','$usuario')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "funcionário cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "funcionário não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['save_login'])) {
    $login = mysqli_real_escape_string($mysqli, $_POST['login']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);


    $query = "INSERT INTO usuario (login,senha) VALUES ('$login','$senha')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "funcionário cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "funcionário não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['save_ocorrncia'])) {
    $nome =  mysqli_real_escape_string($mysqli, $_POST['nome']);
    $obs =  mysqli_real_escape_string($mysqli, $_POST['observacao_cliente']);
    $dep = mysqli_real_escape_string($mysqli, $_POST['dep']);
    $data = mysqli_real_escape_string($mysqli, $_POST['data']);

    $query = "INSERT INTO `ocorrencia`(`id`, `nome`, `observacao_cliente`, `dep`, `estado`, `data`) VALUES(0,'$nome','$obs','$dep','Aberto','$data')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "cliente cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "cliente não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}
?>

