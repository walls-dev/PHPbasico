<?php
setcookie('nomeDoCookie', '', time() - 3600);

header('Location: formulario.php');
exit;