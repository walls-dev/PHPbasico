<?php
############## CRUD  ######################
//PARA EXIBIR - COMO NÃO VOU ENVIAR DADOS POSSO UTILIZAR A QUERY NORMAL SEM O BIND
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
/*$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}*/

?>
<a href="adicionar.php">Adicionar usuário</a>
<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
</tr>
    <?php foreach($lista as $usuario): ?>
    

        <td><?=$usuario->getId();?></td>
        <td><?=$usuario->getNome();?></td>
        <td><?=$usuario->getEmail();?></td>


        <td>
            <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>                
            <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>            
        </td>
    </tr>
    <?php endforeach; ?>
</table>