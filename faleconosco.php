<?php
    echo "<h2>Fale Conosco</h2>";
?>
 <form action="admin/fale-conosco-cadastro.php" method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Assunto:</label><br>
    <input type="text" name="assunto"><br><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" rows="5" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>
