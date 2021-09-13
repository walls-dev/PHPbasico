<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
echo "NOME: ".$nome;