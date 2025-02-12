<?php
require 'dbcon.php';

if (isset($_GET['id'])) {
    $ocorrencia_id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $query = "SELECT o.id, o.*, c.nome AS cliente_nome, f.nome AS nome, f.setor
              FROM ocorrencia o
              LEFT JOIN cliente c ON o.cliente_id = c.id
              LEFT JOIN funcionarios f ON o.responsavel = f.id
              WHERE o.id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $ocorrencia_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $ocorrencia = $result->fetch_assoc();
        ?>
        <div class="mb-3">
            <label>Nome do funcionário:</label>
            <p class="form-control">
                <?= htmlspecialchars($ocorrencia['nome'] ?? "Funcionário não encontrado"); ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Setor do funcionário:</label>
            <p class="form-control">
                <?= htmlspecialchars($ocorrencia['setor']); ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Descrição da ocorrência:</label>
            <p class="form-control">
                <?= htmlspecialchars($ocorrencia['descricao_problema']); ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Data:</label>
            <p class="form-control">
                <?= date('d/m/Y', strtotime($ocorrencia['data'])); ?>
            </p>
        </div>
        <?php
    } else {
        echo "<h4>Nenhuma ocorrência encontrada</h4>";
    }

    $stmt->close();
}
?>