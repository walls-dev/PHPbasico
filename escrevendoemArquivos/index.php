<?php
$texto = 'Esse é o texto a ser inserido no arquivo externo';
file_put_contents('nome.txt', $texto);
echo 'Arquivo criado com sucesso!';

/* O file_put_contents recebe dois parametros: o nome do arquivo externo e a variável do texto a ser inserido. OBS: CASO O ARQUIVO EXTERNO NÃO EXISTA, ELE CRIA AUTOMATICAMENTE E INSERE O TEXTO */