<?php
session_start();
require_once('../template/header.php');
/*  
COMO RECEBER AS INFORMAÇÕES DO FORMULÁRIO
obs: SÓ FAZER O REDIRECIONAMENTO ANTES DE EXIBIR OU ENVIAR QUALQUER COISA
//SEMPRE DEPOIS DO HEADER LOCATION EXECUTAR O EXIT
*/
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
if($nome && $email && $idade){
$expiracao = time() + (86400 * 30);
setcookie('nomeDoCookie', $nome, $expiracao);
echo "EMAIL: ".$email."<br/>";
echo "IDADE: ".$idade;
}else{
    $_SESSION['aviso'] = 'Preencha os campos corretamente!';
    header("Location: formulario.php");
    exit;
}
?>