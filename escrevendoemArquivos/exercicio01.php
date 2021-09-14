<?php
##EXERCICIO
##LER UM ARQUIVO EXTERNO
##ACRESCENTAR UM TEXTO DENTRO DO ARQUIVO
##
$texto = file_get_contents('arqExterno.txt');// LI
$texto .= "\nTEXTO ADICIONADO EM UMA NOVA LINHA";//ADICIONAR UM TEXTO EM UMA NOVA LINHA
file_put_contents('arqExterno.txt', $texto);//SALVANDO NO ARQUIVO EXTERNO
echo "Arquivo alterado com sucesso!";