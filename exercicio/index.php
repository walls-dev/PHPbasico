<?php
session_start();
$_SESSION['nome'] = $nome;
echo "NOME: ".$nome;