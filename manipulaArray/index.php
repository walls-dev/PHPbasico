<?php
//$array = ['1', '2', '3'];
$array = range(900001, 900050);//range tem 2 parametros
// o 1º é o que vai começar e o 2º é o que vai terminar
foreach($array as $item){
    echo $item."<br/>";
}