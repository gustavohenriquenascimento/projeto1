<?php
require_once "config.inc.php";

$id = $_GET["id"];
$sql = "SELECT * FROM fale_conosco WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_array($resultado)) {
        $id       = $dados['id'];
        $nome     = $dados['nome'];
        $email    = $dados['email'];
        $assunto  = $dados['assunto'];
        $mensagem = $dados['mensagem'];
    }
?>

<h2>Editar Mensagem</h2>
<form action="?pg=fale-conosco-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>

    <label>Email:</label>
    <input type="text" name="email" value="<?=$email?>"><br>

    <label>Assunto:</label>
    <input type="text" name="assunto" value="<?=$assunto?>"><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" rows="4" cols="40"><?=$mensagem?></textarea><br>

    <input type="submit" value="Salvar Alterações">
</form>

<?php
} else {
    echo "<h2>Nenhuma mensagem encontrada!</h2>";
}
?>