<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa de Dados</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
<?php include './includes/navbar_modal.php'?><!--Navbar-->
    <div class="container">
        <h2>Pesquisa de Dados</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="cpf">cpf:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf">
            </div>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém o ID digitado pelo usuário
            $cpf = $_POST["cpf"];

            // Conexão com o banco de dados (substitua os valores pelos seus dados de conexão)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cordeiro";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica se houve erro na conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Consulta SQL para buscar os dados no banco de dados
            $sql = "SELECT id, nome, cpf FROM cliente WHERE cpf = $cpf";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibe a tabela com os dados encontrados
                echo "<div class='table-responsive'>";
                echo "<table class='table table-striped'>";
                echo "<thead><tr><th>ID</th><th>Nome</th><th>CPF</th></tr></thead>";
                echo "<tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["cpf"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                echo "</div>";
            } else {
                echo "Nenhum resultado encontrado.";
            }

            // Fecha a conexão com o banco de dados
            $conn->close();
        }
        ?>

    </div>
    <!-- Inclua os arquivos JS do Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
