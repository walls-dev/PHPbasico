<?php
//1º RECEBO OS DADOS
//$nome = filter_input(INPUT_POST, 'nome');
//2º SANITIZO OS DADOS RECEBIDOS
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
//3º VERIFICO SE EXISTE E EXECUTO ALGO
if($nome){
    echo "NOME: ".$nome;
}else{
    echo "PREENCHA O CAMPO";
}