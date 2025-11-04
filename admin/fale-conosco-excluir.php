<?php
require_once "config.inc.php"; // conexão com o banco

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM fale_conosco WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        $mensagem = "Mensagem excluída com sucesso!";
    } else {
        $mensagem = "Erro ao excluir mensagem: " . mysqli_error($conexao);
    }
} else {
    $mensagem = "ID inválido!";
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Mensagem</title>
</head>
<body>

<h2><?php echo $mensagem; ?></h2>
<p><a href="painel-fale-conosco.php">Voltar ao painel</a></p>

</body>
</html>
