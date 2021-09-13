<?php
session_start();
if($_SESSION['nome']){
    echo "Olá, ".$_SESSION['nome']."<br/>";
    $_SESSION['nome'] = '';
}else{
    echo "";
}
echo "<h3>PÁGINA INICIAL</h3>"."<br/>";

?>
<a href="">Sair</a>&nbsp;&nbsp;<a href="login.php">Login</a>
