<?php
require 'config.php';
// apos criar o formulario que vai enviar para esse arquivo aqui
//o proximo passo é pegar os itens
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//LOGO APOS VERIFICO SE EMAIL E NAME ESTAO CORRETOS SE TIVER TUDO CERTO PASSA PARA O PROX PASSO
//CASO CONTRARIO REDIRECIONO PARA A PAGINA DE ADICIONAR
if($name && $email){
    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->execute();

    header("Location: crud.php");
    exit;

} else{
    header("Location: adicionar.php");
    exit;
}
