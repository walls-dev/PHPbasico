<?php

$lorem1 = [
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
];
$lorem2 = [
...$lorem1,
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
];
$lorem3 = [...$lorem1, ...$lorem2];

/*echo $lorem2[5]."<br/>";
echo $lorem1[0]." ".$lorem1[1]."<br/>";
echo $lorem1[0]." ".$lorem1[1]." ".$lorem1[2]."<br/>";
echo $lorem3[0];*/
//print_r($lorem3);

/*$lista = [
    'nome' => 'Walls',
    'idade' => 36,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

//echo "NOME: ".$lista['nome']."<br/>";
//echo "FORÇA: ".$lista['atributos']['forca']."<br/>";;
//echo "VIDA: ".$lista['vida'];
//print_r($lista);
$candidato = [
    'concurso' => 'CFS 2022',
    'nome' => 'JOÃO',
    'sobrenome' => 'GOMES',
    'idade' => 23,
    'cor' => 'Negro',
    'parametros' => [
        'espec' => 'BCT',
        'totVagas' => 10,
        'totVagasRes' => 3,
        'oVR' => true,
        'isento' => false,
        'redome' => false,
        'txInsc' => true,
        'mat' => 2.0,
        'por' => 2.0,
        'ing' => 2.0,
    ],
    ];

$mediaFinal = ($candidato['parametros']['mat'] +
              $candidato['parametros']['por'] +
              $candidato['parametros']['ing'])/3;

/*SITUAÇAO DO CANDIDATO APÓS AS PROVAS ESCRITAS:

SITUAÇÃO: APROVADO OU REPROVADO
MÉDIA EM PORT: MAT: ING:
MÉDIA FINAL: 
CLASSIFICAÇÃO: 
VAGAS RESERVADAS: SIM OU NÃO
CONVOCAÇÃO: CONVOCADO OU NÃO CONVOCADO PARA A CINT*/
/*echo "DADOS DO CANDIDATO: "."<br/>";

echo "NOME: ".$candidato['nome']."<br/>";
echo "EXAME: ".$candidato['concurso']."<br/>";
echo "IDADE: ".$candidato['idade']."<br/>";
echo "ESPEC: ".$candidato['parametros']['espec']."<br/>";
echo "TOTAL DE VAGAS: ".$candidato['parametros']['totVagas']."<br/>";
echo "TOTAL DE VAGAS RESERVADAS: ".$candidato['parametros']['totVagasRes']."<br/>";

echo "OPTOU POR VAGA RESERVADA:";
echo ($candidato['parametros']['oVR'] == true) ? "SIM" : "NÃO";
echo "<br/>";
echo "SOLICITOU ISENÇÃO BX RENDA: ";
echo ($candidato['parametros']['isento'] == true) ? "SIM" : "NÃO";
echo "<br/>";
echo "SOLICITOU ISENÇÃO DOADOR MEDULA ÓSSEA: ";
echo ($candidato['parametros']['redome'] == true) ? "SIM" : "NÃO";
echo "<br/>";
echo "PAGOU TAXA DE INSCRIÇÃO: ";
echo ($candidato['parametros']['txInsc'] == true) ? "SIM" : "NÃO";
echo "<br/>";
echo "<hr>";
echo "SITUAÇAO DO CANDIDATO ". $candidato['nome'] . " DURANTE AS INSCRIÇÕES:"."<br/>";
if ($candidato['idade'] < 24){
    echo "CANDIDATO DENTRO DOS LIMITES DE IDADE, CONFORME AS I.E";
}else {
    echo "ATENTE PARA O ITEM 8.1 DAS I.E - HABILITAÇÃO À MATRÍCULA"."<br/>";
    echo "No ato da matrícula, você estará acima da idade exigida";
}
echo "<hr/>";
echo "SITUAÇAO DO CANDIDATO ". $candidato['nome'] . " APÓS AS PROVAS ESCRITAS:"."<br/>";
/*if ($mediaFinal < 6.0) {
    echo "SITUAÇÃO: "."Reprovado" ."<br/>";
    echo "MÉDIA FINAL: ".$mediaFinal;
}else{
    echo "SITUAÇÃO: "."Aprovado" ."<br/>";
    echo "MÉDIA FINAL: ".$mediaFinal;
}*/

//(CONDIÇÃO) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;
/*echo
($mediaFinal >= 6.0) ? "CANDIDATO: "."APROVADO" : "CANDIDATO: "."REPROVADO";
echo "<br/>";
echo
"MÉDIA FINAL: ".$mediaFinal;
echo "<hr>";

$nomeCompleto = $candidato['nome'];
//$nomeCompleto .= isset($candidato['sobrenome']) ? ' '.$candidato['sobrenome'] : '';
$nomeCompleto .= ' '.$candidato['sobrenome'] ?? '';
echo "NOME COMPLETO: ".$nomeCompleto;
echo "<br/>";
echo "<hr>";
$tipo = 'foto';

/*if ($tipo == 'foto'){
    echo 'Exibindo uma foto';
}
if ($tipo == 'video'){
    echo 'Exibindo um vídeo';
}
if ($tipo == 'texto'){
    echo 'Exibindo um texto';
}*/

/*switch($tipo){
    case 'foto':
        echo 'Exibindo Foto';
        break;
    case 'video':
        echo 'Exibindo Vídeo';
        break;
    case 'texto':
        echo 'Exibindo Texto';
        break;
}
echo "<br/>";
echo "<hr>";
/*$numero = 0;
while ($numero <= 10){
    echo "N: ". $numero."<br/>";
    $numero += 1;
}*/
/*for ($i = 1; $i <=6; $i ++){
    echo $i;
}
echo "<br/>";
echo "<hr>";
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];
foreach($ingredientes as $chave => $valor){
    echo "Item ".($chave + 1).": ".$valor."<br/>";
}
echo "<br/>";
echo "<hr>";
$c = 1;
while ($c <= 10){
for ($i = 1; $i <= 30; $i++){
    echo $linha = "-";
        }
    $c+=1;
    echo $linha."<br/>";
}

function subsequente(){
    for($q = 1; $q <=10; $q++){
        echo $q."<br/>";
    }
    echo "<hr>";
}

for($n=1; $n <=3; $n++){
    subsequente();
}
//funçao recursiva
function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if(round($metade) > 0){
        dividir($metade);
    }
}
dividir(100);
echo "<br/>";
echo "<hr>";*/
// função numero aleatório
$aleatorio = rand(900001, 950000);
echo $aleatorio;
echo "<br/>";
echo "<hr>";
$lista = [0, 2, 55, 1052, 3589];
echo min($lista) . " a ". max($lista);






 
 