<?php
session_start();
//1º RECEBO OS DADOS
//$nome = filter_input(INPUT_POST, 'nome');
//2º SANITIZO OS DADOS RECEBIDOS
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
//3º VERIFICO SE EXISTE E REDIRECIONO PARA A INDEX
if($nome){
    $_SESSION['nome'] = $nome;
    header('Location:index.php');
    exit;
}else{
    $_SESSION['aviso'] = 'Preencha os campos corretamente!';
    header('Location: login.php');
    exit;
}
//4º INICIO A SESSAO EM TODAS AS PAGINAS
//5º VERIFICO SE A SESSAO EXISTE E SENÃO DIVULGO O AVISO