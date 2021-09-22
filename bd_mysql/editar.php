<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';
$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');
if($id){
    $usuario = $usuarioDao->findById($id);
}
if($usuario === false) {
    header("Location: index.php");
    exit;
}
?>

<h1>Editar Usuário</h1>
<form action="editar_action.php" method="POST">
<input type="hidden" name="id" value="<?=$usuario->getId();?>">
<label>
Nome:<br/>
<input type="text" name="name" value="<?=$usuario->getNome();?>">
</label><br/><br/>
<label>
Email:<br/>
<input type="text" name="email" value="<?=$usuario->getEmail();?>">
</label><br/><br/>
<input type="submit" value="Salvar">
</form>
