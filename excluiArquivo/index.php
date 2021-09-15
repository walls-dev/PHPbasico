<?php
$arquivo = file_get_contents('arquivo.txt');
unlink('arquivo.txt');
echo "Arquivo excluído com sucesso!";