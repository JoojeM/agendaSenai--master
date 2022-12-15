<?php
session_start();
include 'inc/header.inc.php';
include 'classes/usuarios.class.php';

$usuarios = new Usuarios();

?>
        <body>
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
        </body>

        <table class="table table-bordered" width="100%">
            
        <tr algin="center" bgcolor="white">
             <th><font face="cursive"><u>NOME</u></th>
             <th><font face="cursive"><u>EMAIL</u></th>
        </th>
        
        <?php
            $lista = $usuarios->listar();
            foreach($lista as $item);
        ?>

        <tr algin="center" bgcolor="white">
            <td><font face="cursive"><b><?php echo $item['nome'];?></b></td>
            <td><font face="cursive"><b><?php echo $item['email'];?></b></td>
        </tr>
        </table>
        <center><a><button class="btn btn-info"><a href="adicionar_usuario.php">CRIAR NOVO USUARIO</a></button></center>
        <?php
        include 'inc/footer.inc.php';
        ?>
            