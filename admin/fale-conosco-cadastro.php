<?php
require_once "config.inc.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

   
    $sql = "INSERT INTO fale_conosco (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)";

  
    $stmt = mysqli_prepare($conexao, $sql);
    if (!$stmt) {
        die("<h3>Erro ao preparar a consulta: " . mysqli_error($conexao) . "</h3>");
    }

   
    mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $assunto, $mensagem);

   
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Mensagem enviada com sucesso!</h3>";
    } else {
        echo "<h3>Erro ao executar: " . mysqli_stmt_error($stmt) . "</h3>";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conexao);
} else {
    echo "<h3>Acesso inválido!</h3>";
}
// professor não consegui colocar um botão para voltar, sempre cai no else "acesso inválido"
?>
