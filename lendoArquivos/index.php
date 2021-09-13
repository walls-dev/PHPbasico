<?php
$pag = file_get_contents('pag.txt');
$pag = explode("\n", $pag);
echo "LINHAS:".count($pag);