<?php
require_once "config.inc.php"; 

// Consulta todas as mensagens
$sql = "SELECT id, nome, email, assunto, mensagem, data_envio FROM fale_conosco ORDER BY data_envio DESC";
$resultado = mysqli_query($conexao, $sql);

// Verifica erro na consulta
//if (!$resultado) {
   // die("<h3>Erro ao consultar o banco de dados: " . mysqli_error($conexao) . "</h3>");
//}

$mensagens = [];
while ($linha = mysqli_fetch_assoc($resultado)) {
    $mensagens[] = $linha;
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - Fale Conosco</title>
</head>
<body>

<h2>Painel - Mensagens Recebidas</h2>

<?php if (count($mensagens) > 0): ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Data de Envio</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($mensagens as $msg): ?>
            <tr>
                <td><?php echo htmlspecialchars($msg['id']); ?></td>
                <td><?php echo htmlspecialchars($msg['nome']); ?></td>
                <td><?php echo htmlspecialchars($msg['email']); ?></td>
                <td><?php echo htmlspecialchars($msg['assunto']); ?></td>
                <td><?php echo nl2br(htmlspecialchars($msg['mensagem'])); ?></td>
                <td><?php echo htmlspecialchars($msg['data_envio']); ?></td>
                <td>
                    <a href="fale-conosco-excluir.php?id=<?php echo $msg['id']; ?>">Excluir</a>
                    <a href='?pg=fale-conosco-form&id=<?php echo $msg["id"]; ?>'>Editar</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>Nenhuma mensagem encontrada.</p>
<?php endif; ?>

</body>
</html>
