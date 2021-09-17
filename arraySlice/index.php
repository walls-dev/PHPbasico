<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];
$retorno = array_slice($array, 0, 3);//primeoro parametro é de onde começa e 2º qtd de itens
//OBS: PODE SER UTILIZADO EM PAGINAÇÃO
print_r($retorno);
echo "<br/>";

//$alterado = array_splice($array, 2, 1); //remove o array posicao 2
//$alterado = array_splice($array, 0, 1, 'g');//remove o item 'a' e acrescenta o 'g'. 
//POSSO ADICIONAR UM ARRAY 
$alterado = array_splice($array, 0, 1, ['g', 'h']);
print_r($array);