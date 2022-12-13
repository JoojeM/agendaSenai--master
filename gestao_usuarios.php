<?php
session_start();
include 'inc/header.inc.php';
include 'classes/usuarios.class.php';

if(!isset($_SESSION['logado'])){
    header('Location: login.php')
    exit;
}

$usuarios = new Usuarios();

$usuarios->setUsuarios($_SESSION['logado']);
?>
        <h1>usuarios Senai</h1>
        <hr>
        <?php if($usuarios->temPermissao('')): ?><button><a href="adicionar_usuario.php">CRIAR NOVA CONTA</a><button><?php endif; ?>
        <br><br><hr>
        <button><a href="sair.php">SAIR</a><button>
            <table border="1" width="100%">
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
        </th>
        <?php
            $lista = $usuarios->listar();
            foreach($lista as $item);
        ?>
        <tr>
            <td><?php echo $item['nome'];?></td>
            <td><?php echo $item['email'];?></td>
            <td>
                <button><a href="editar_usuario.php?id=<?php echo $item['id'];?>">EDITAR USUARIO</a></button>
                <button><a href="ecluir_usuario.php?id=<?php echo $item['id'];?>">EXCLUIR USUARIO</a></button>
            </td>
        </tr>

<?php
include 'inc/footer.php';
?>