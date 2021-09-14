<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo "Olá, ".$_SESSION['usuario']."<br/>";
}
?>
<h3>PÁGINA INICIAL</h3>
<a href="login.php">Sair</a>&nbsp;&nbsp;<a href="login.php">Login</a>
