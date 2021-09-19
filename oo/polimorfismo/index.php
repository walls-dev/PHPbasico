<?php
//O POLIMORFISMO SIGNIFICA VÁRIAS FORMAS
//EX: QUADRADO E CIRCULO
//1-COLOCAR VÁRIOS OBJETOS EM UM ARRAY [$quadrado, $circulo];
//2-crio uma classe QUADRADO E UMA CLASSE CIRCULO
//3-crio os objetos. $quadrado = new Quadrado(); 5 de largura e 5 de altura
//o objetivo é mostrar a área de cada um deles - uso o foreach
//AÍ É QUE TA O PULO DO GATO: EU NÃO QUERO SABER NESSE FOREACH QUE OBJETO É ESSE
//APENAS QUERO SABER A AREA, então dou apenas um getArea, pois é comum aos dois objetos
//observe que os dois objetos tem que ter getTipo e getArea, ou seja, uma das formas de se fazer
//e criar uma interface FORMA contendo as duas funçoes comuns aos dois objetos
//logo depois implemento as classes quadrado e circulo: class Quadrado implements Forma;
//crio os atributos dos objetos e o construtor para enviar os dados largura e altura
//A INTERFACE É UMA APLICAÇÃO DO POLIMORFISMO

interface Forma{
    public function getTipo();
    public function getArea();
}
class Quadrado implements Forma{
    private int $largura;
    private int $altura;

    public function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo(){
        return 'Quadrado';
    }
    public function getArea(){
        return $this->largura * $this->altura;
    }
}
class Circulo implements Forma{
    private int $raio;

    public function __construct($r){
        $this->raio = $r;
    }
    public function getTipo(){
        return 'Círculo';
    }
    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);
$objetos = [
    $quadrado,
    $circulo
];
foreach($objetos as $objeto){
    echo "ÁREA: ".$objeto->getTipo()." : ".$objeto->getArea()."<br/>";
}