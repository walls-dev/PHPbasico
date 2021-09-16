<?php
//$array = ['1', '2', '3'];
$array = range(900001, 900010);//range tem 2 parametros
// o 1º é o que vai começar e o 2º é o que vai terminar
// o 3º nao é obrigatorio é de quanto em quanto ele salta: ex: 2
// pode ser letra também
foreach($array as $item){
    echo $item."<br/>";
}
//KEY EXISTS
$candidato = [
        'nome' => 'Walls',
        'idade' => 35,
        'exame' => 'EAGS 2020',
        'oVR' => true,
        'cor' => 'negra',
        'espec' => 'SIM'
];
if(key_exists('idade', $candidato)){
$idade = $candidato['idade'];
echo "Idade: ".$idade." anos";
}else{
    echo "Não tem idade";
}