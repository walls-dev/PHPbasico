<?php
//MUITO UTILIZADO NO PHP MODERNO
//NORMALMENTE UTILIZADO PARA DIVISÃO DE PASTAS
/*require 'classe1.php';
require 'classe2.php';
$a = new classe2\MinhaClasse();
echo $a->testar();*/
require 'classes/matematica/basico.php';

use classes\matematica\Basico as Basico;
$basico = new classes\matematica\Basico();