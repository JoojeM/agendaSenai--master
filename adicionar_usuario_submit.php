<?php 
include 'classes/usuarios.class.php';
$usuario = new Usuarios();

if(!empty($_POST['id'])){
    if(!empty($_POST['email'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $usuario->adicionar($nome, $email, $senha);
        header('Location: index.php');
    }
    else{
        echo 'script type="text/javascript">alert("Usuario ja cadastrado");</script>';
    }
}