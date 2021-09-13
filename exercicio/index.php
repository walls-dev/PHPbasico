<?php
session_start();
if($_SESSION['usuario']){
    echo "Olá, ".$_SESSION['usuario']."<br/>";
}
echo "<h3>PÁGINA INICIAL</h3>"."<br/>";

?>
<a href="">Sair</a>&nbsp;&nbsp;<a href="login.php">Login</a>
