<?php
require_once('../template/header.php');
/*  
COMO RECEBER AS INFORMAÇÕES DO FORMULÁRIO





*/
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
if($nome && $idade){
echo "NOME: ".$nome. "  |  "."IDADE: ".$idade;
}else{
    header("Location: formulario.php");
}

?>