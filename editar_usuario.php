<?php
require 'inc/header.inc.php';
require 'classes/usuarios.class.php';
$usuario = New Usuarios();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $usuario->busca($id);
        if(empty($info['email'])){
            header("Location: /agemdaSenai");
            exit;
        }
}else{
    header("Location: /agendaSenai");
    exit;
}
?>

<h1>EDITAR USUARIO</h1>
<form method="post" action="editar_usuario_submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>"><br><br>
    Email:<br>
    <input type="email" name="email" value="<?php echo $info['email'];?>"><br><br>
    Senha:<br>
    <input type="text" name="senha" value="<?php echo $info['senha'];?>"><br><br>

    <input type="submit" value="SALVAR">
</form>

<?php require 'inc/footer.inc.php';?>