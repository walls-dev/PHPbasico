<?php
$texto = 'Esse é o texto a ser inserido no arquivo externo';
file_put_contents('nome.txt', $texto);
echo 'Arquivo criado com sucesso!';