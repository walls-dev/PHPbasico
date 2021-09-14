<?php
session_start();
if(isset($_SESSION['alerta'])){
    echo $_SESSION['alerta'];
    $_SESSION['alerta'] = '';
}
?>
<form method= "POST" action="recebe.php">
    <label>
        Nome:
        <input type="text" name="nome">
        <br/>
        <br/>
        <input type="submit" value="Salvar">
    </label>
</form>

