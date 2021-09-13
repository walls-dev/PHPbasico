<?php
session_start();
if($_SESSION['usuario']){
    echo "Olá, ".$_SESSION['usuario']."<br/>";
}else{
    echo "";
}
echo "<h3>PÁGINA INICIAL</h3>"."<br/>";

?>
<a href="logout.php">Sair</a>&nbsp;&nbsp;<a href="login.php">Login</a>
