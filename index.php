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

$lista = [
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
    'nome' => 'João',
    'idade' => 20,
    'cor' => 'Negro',
    'parametros' => [
        'espec' => 'BCT',
        'totVagas' => 10,
        'totVagasRes' => 3,
        'oVR' => true,
        'isento' => false,
        'redome' => false,
        'txInsc' => true,
        'mat' => 7.0,
        'port' => 7.8,
        'ing' => 7.6,
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


echo "SITUAÇAO DO CANDIDATO".$candidato['nome']. "APÓS AS PROVAS ESCRITAS:"."<br/>";
if ($mediaFinal >= 6.0) {
    echo "SITUAÇÃO: "."Aprovado";
}else{
    echo "SITUAÇÃO: "."Reprovado";
}
