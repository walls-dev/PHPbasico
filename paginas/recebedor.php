<?php
require_once('../template/header.php');
/*  
COMO RECEBER AS INFORMAÇÕES DO FORMULÁRIO
obs: SÓ FAZER O REDIRECIONAMENTO ANTES DE EXIBIR OU ENVIAR QUALQUER COISA
//SEMPRE DEPOIS DO HEADER LOCATION EXECUTAR O EXIT




*/
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$idade = filter_input(INPUT_POST, 'idade');
if($nome && $email){
echo " NOME: ".$nome."<br/>";
echo "email: ".$email."<br/>";
echo "Idade: ".$idade;
}else{
    header("Location: formulario.php");
    exit;
}

?>