<?php
session_start();
require 'classes/usuarios.class.php';
require 'fonte.php';


if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $usuario = new Usuarios();
    if($usuario->fazerLogin($email, $senha)){
        header("Location: index.php");
        exit;
    }else{
        echo "Usuário e/ou senha estão incorretos!";
    }
}
?>
<body>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</body>

    <head>
    <h1><center><img src="img/logos_senai_branco.png" style="width: 35%" alt="Logo do Senai"></center></h1>

    <h2><center><p class="a">LOGIN</center></h2>

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<fieldset>
    <form method="post">
       <center><p class="b"> Email: <br>
        <input type="email" name="email"><br><br> </center>
       <center><p class="b"> Senha: <br>
        <input type="password" name="senha"><br><br></center>
       <center><p class="b"> <input type="submit" value="Entrar"> </center>
        <link rel="styleheet" type="text/css" href="css/estilo.css">
    </form>
</fieldset>

<footer>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</footer>

