<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';
$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if($id){
    //achou o id exclui
    $usuarioDao->delete($id);
    
}
header("Location: index.php");
exit;