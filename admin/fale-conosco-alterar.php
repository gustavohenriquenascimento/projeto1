<?php
require_once "config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id       = $_POST["id"];
    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $assunto  = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    $sql = "UPDATE fale_conosco SET 
                nome = '$nome',
                email = '$email',
                assunto = '$assunto',
                mensagem = '$mensagem'
            WHERE id = '$id'";

    if (mysqli_query($conexao, $sql)) {
        echo "<h3>Mensagem alterada com sucesso!</h3>";
        echo "<a href='?pg=painel-fale-conosco'>Voltar</a>";
    } else {
        echo "<h3>Erro ao alterar mensagem!</h3>";
        echo "<p>" . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=painel-fale-conosco'>Voltar</a>";
    }

} else {
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=painel-fale-conosco'>Voltar</a>";
}

mysqli_close($conexao);
?>



