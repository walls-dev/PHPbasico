<?php
/*PARA CONTAR O NÚMERO DE LINHAS DE UM TXT 
1 - PEGO O ARQUIVO - file_get_contents('caminho do arquivo/ pode ser url externa')
2 - CRIO UM EXPAÇO ENTRE AS LINHAS explode("\n", $variavel)
3 - conto as linhas count($variavel)
*/
$pag = file_get_contents('pag.txt');
$pag = explode("\n", $pag);
echo "LINHAS:".count($pag);