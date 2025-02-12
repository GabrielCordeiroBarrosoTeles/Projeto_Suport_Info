<?php
require 'dbcon.php';

if (isset($_GET['id'])) {
    $ocorrencia_id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $query = "SELECT o.*, c.nome AS cliente_nome
          FROM ocorrencia o
          LEFT JOIN cliente c ON o.cliente_id = c.id
          WHERE o.id = '$ocorrencia_id'";
    $query_run = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $ocorrencia = mysqli_fetch_array($query_run);
        ?>
        <div class="mb-3">
            <label>Nome do Cliente</label>
            <p class="form-control">
            <?= htmlspecialchars($ocorrencia['cliente_nome'] ?? "Cliente não encontrado"); ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Setor:</label>
            <p class="form-control">
                <?= $ocorrencia['setor']; ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Descrição</label>
            <p class="form-control">
                <?= $ocorrencia['descricao_problema']; ?>
            </p>
        </div>
        <div class="mb-3">
            <label>Data</label>
            <p class="form-control">
                <?= date('d/m/Y', strtotime($ocorrencia['data'])); ?>
            </p>
        </div>
        <?php
    } else {
        echo "<h4>Nenhuma ocorrência encontrada</h4>";
    }
}
?>