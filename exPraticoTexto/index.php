<form action="index.php" method="POST">
<label>
Novo Nome:<br/>
<input type="text" name="novoNome">
</label>
<input type="submit" value="Adicionar">
</form>
<h3>Lista de Nomes</h3>
<?php
$nomes = file_get_contents('nomes.txt');
$nomes = "<li>".$nomes."</li>";
echo $nomes;
?>
