<?php
$arquivo = file_get_contents('arquivo.txt');
unlink('arquivo.txt');
echo "Arquivo ".$arquivo." excluído com sucesso!";