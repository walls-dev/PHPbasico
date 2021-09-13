<?php
session_start();
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
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