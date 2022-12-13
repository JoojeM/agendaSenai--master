<?php 
require 'classes/contatos.class.php';
$usuario = new Usuarios();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

        if(!empty($email)){
            $usuario->editar($nome, $email, $senha);
        }
        header('Location: /agendaSenai');
}