<?php require 'inc/header.inc.php';?>

<h1> ADICIONAR USUARIO </h1>
<form method="post" action="adicionar_usuario_submit.php">
    Nome: <br>
    <input type="text" name="nome"><br><br>
    Senha: <br>
    <input type="text" name="senha"><br><br>
    Email: <br>
    <input type="email" name="email"><br><br>

    <input type="submit" name="btCadastrar" value="ADICIONAR">
</form>

<?php require 'inc/footer.inc.php';?>