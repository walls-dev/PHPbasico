<?php
session_start();
require_once('../template/header.php');
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>
<a href="apagaCookie.php">Apagar Cookie</a>
<h3>Formulário</h3>
<form method= "POST" action="recebedor.php">

<label>
Nome:
<br/>
<input type="text" name="nome">
</label>
<br/>
<br/>

<label>
email:
<br/>
<input type="text" name="email">
</label>
<br/>
<br/>

<label>
Idade:
<br/>
<input type="text" name="idade">
</label>
<br/>
<br/>

<input type="submit" value="Enviar" >
</form>
