<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if($nome){
    $_SESSION['usuario'] = $nome;
    header('Location: index.php');
    exit;
}else{
    $_SESSION['alerta'] = 'Preencha o nome do usuário';
    header('Location:login.php');
    exit;
}

