<?php

 //   $conexao = mysqli_connect("127.0.0.1","root","");

 //   $db = mysqli_select_db($conexao,"projeto11");

  //  if(!$conexao){
  //     echo "<h2>Erro ao conectar o banco de dados</h2>";
 //   }

//echo"olá";
// Conexão com o MySQL (servidor local, usuário root, sem senha)
$conexao = mysqli_connect("127.0.0.1", "root", "");

// Verifica se conectou com sucesso
if (!$conexao) {
    die("<h2>Erro ao conectar ao servidor MySQL: " . mysqli_connect_error() . "</h2>");
}

// Seleciona o banco de dados
$db = mysqli_select_db($conexao, "projeto11");

?>
