<?php
class Matematica {

    public static string $nome = 'Walls';
    public static function somar($x, $y){
        return $x + $y;
    }

}

echo Matematica::somar(50, 50)."<br/>";
echo Matematica::$nome;
//a vantagem da funçao estática é que não precisa instanciar a classe ou seja criar um
//objeto para que seja aproveitada aquela função
//OS :: SIGNIFICA ACESSE A CLASSE OU A PROPRIEDADE TAL