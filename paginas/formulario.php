<?php
require_once('../template/header.php');
?>
<h3>Formulário</h3>
<form method= "GET" action="recebedor.php">

<label>
Nome:
<br/>
<input type="text" name="nome">
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