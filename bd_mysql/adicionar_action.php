<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';
$usuarioDao = new UsuarioDaoMysql($pdo);
// apos criar o formulario que vai enviar para esse arquivo aqui
//o proximo passo é pegar os itens
//filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//LOGO APOS VERIFICO SE EMAIL E NAME ESTAO CORRETOS SE TIVER TUDO CERTO PASSA PARA O PROX PASSO
//CASO CONTRARIO REDIRECIONO PARA A PAGINA DE ADICIONAR
if($name && $email){

    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit;
    }else{
        header("Location: adicionar.php");
        exit;
    }
}else{
    header("Location: adicionar.php");
    exit;
}


    


