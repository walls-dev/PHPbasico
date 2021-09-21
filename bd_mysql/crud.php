<?php
############## CRUD  ######################
//PARA EXIBIR - COMO NÃO VOU ENVIAR DADOS POSSO UTILIZAR A QUERY NORMAL SEM O BIND
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

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
    <tr>
        <td><?=$usuario['id'];?></td><!--observe como foi substituido o php echo-->
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>                
            <a href="excluir.php?id=<?=$usuario['id'];?>">[ Excluir ]</a>            
        </td>
    </tr>
    <?php endforeach; ?>
</table>