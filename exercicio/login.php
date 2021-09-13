<?php
session_start();
echo "<h2>EXERCICIO</h2>";
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