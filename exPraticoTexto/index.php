<?php
echo "<form action='index.php' method='POST'>";
echo "<label>";
echo "Novo Nome:"."<br/>";
echo "<input type='text' name=''>";
echo "</label>";
echo "<input type='submit' value='Adicionar'>";
echo "</form>";
echo "<h3>"."Lista de Nomes"."</h3>";
###############################################
$nomes = file_get_contents('nomes.txt');
$novoNome = '';
$nomes .="\n$novoNome";
$nomes = explode("\n", $nomes);
echo count($nomes);

