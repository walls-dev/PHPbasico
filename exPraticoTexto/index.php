<?php

echo "<form action='index.php' method='POST'>";
echo "<label>";
echo "Novo Nome:"."<br/>";
echo "<input type='text' name='novoNome'>";
echo "</label>";
echo "<input type='submit' value='Adicionar'>";
echo "</form>";
echo "<h3>"."Lista de Nomes"."</h3>";
###############################################
$novoNome = filter_input(INPUT_POST, 'novoNome', FILTER_SANITIZE_SPECIAL_CHARS);
$nomes = file_get_contents('nomes.txt');//li
$nomes = explode("\n", $nomes);
##$nomes .= "\n".$novoNome;//adicionando novo nome
##$nomes = file_put_contents('nomes.txt', $novoNome);//salvando novo nome
echo count($nomes);

/*$pag = file_get_contents('pag.txt');
$pag = explode("\n", $pag);
echo "LINHAS:".count($pag);*/










