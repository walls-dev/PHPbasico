
<?php/*
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
$lorem3 = [...$lorem1, ...$lorem2];*/

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
8888888888888888888888888888888888888888888888888888888888888888888888
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
/*$aleatorio = rand(900001, 950000);
echo $aleatorio;
echo "<br/>";
echo "<hr>";
$lista = [0, 2, 55, 1052, 3589];
echo min($lista) . " a ". max($lista);
echo "<br/>";
echo "<hr>";
echo "<h3>MUITO USADO (IMPORTANTE)</h3>";
$nomeSujo = '      Walls        ';
$nomeLimpo = trim($nomeSujo);
echo "NOME SUJO: ".strlen($nomeSujo)."<br/>";//strlen conta qtos caracteres
echo "NOME LIMPO: ".strlen($nomeLimpo)."<br/>";
$nome = 'Ana Maria Braga';
echo strtolower($nome)."<br/>";//minusculo
echo strtoupper($nome)."<br/>";//maiusculo
$nomeAlterado = str_replace('a', '4', $nome);//substituir
echo strtoupper($nomeAlterado)."<br/>";
$partNome = substr($nome, 0, 5);//a partir da posição zero até a posição 5
$partNome2 = substr($nome, 4, 5);//o nro 5 é qtd de caractere a partir da 4 posicao
$partNome3 = substr($nome, -5, 5);//de trás para frente -5 posição e 5 caracteres
echo $partNome."<br/>";
echo $partNome2."<br/>";
echo $partNome3."<br/>";
$pagamento = "10929406770   220572021090120210903 04:24000000000000093206441200640000000000000700000000000000007000";
$posicao = strpos($nome, 'Maria');//indica a posição em que aparece Maria
if($posicao != 4){
    echo "String na posição incorreta";
}else{
    echo "String na Posição: ".$posicao;
}
echo "<br/>";
echo "<hr>";
$onde = strpos($pagamento, '22057');
if($onde != 14){
    echo "POSIÇÃO ERRADA";
}else{
    echo "CAMPO 22057 NA POSIÇÃO: ".$onde;
}
echo "<br/>";
echo "<hr>";
$nomes = explode(' ', $nome);
print_r($nomes);
//echo $nomes[2];

function ast(){
    echo "<br/>";
    for($a=1; $a <= 100; $a++){
        echo '*';
    }
}
ast();
echo"<h3>CONTAR ITENS DO ARRAY</h3>";
$list = ['nome1', 'nome2','nome31','nome4'];
echo "TOTAL: ".count($lista);
ast();
echo"<h3>DIFERENÇA ENTRE ARRAYS</h3>";
$listaGeral = ['Victor', 'Sandra','Walls','Nina', 'Cookie', 'Hulck'];
$aprovados = ['Victor', 'Sandra', 'Cookie'];
$reprovados = array_diff($listaGeral, $aprovados);
print_r($reprovados);
ast();
echo"<h3>FILTRAR UM ARRAY</h3>";
$classificacao = ['7', '211', '198', '8', '30', '9', '16', '2', '10', '55', '63', '1', '3', '4', '5', '6'];
$convocados = array_filter($classificacao, function($item){
    if($item <= 10){
        return true;
    }else{
        return false;
    }
});
print_r($convocados);
ast();
echo"<h3>MAPEAR UM ARRAY E EXECUTAR FUNÇAO</h3>";
$number = ['0' , '3', '26', '13', '9', '4', '6'];
$double = array_map(function($item){
    return $item *2;
}, $number);
print_r($double);
ast();*/
/*function ast(){
    echo "<br/>";
    for($a=1; $a <= 120; $a++){
        echo '*';
    }
}
echo"<h3>REMOVER O 1º E ULTIMO ITEM DO ARRAY</h3>";
$number = ['0' , '3', '26', '13', '9', '4', '6'];
array_pop($number);
array_shift($number);
print_r($number);
ast();
echo"<h3>BUSCA EM UM ARRAY</h3>";
if(in_array(250, $number)){
    echo "ENCONTRADO";
}else{
    echo "NÃO ENCONTRADO";
}
ast();
echo"<h3>SEARCH != IN_ARRAY</h3>";
$pos = array_search(26, $number);
echo $pos;
echo"<h3>ORDEM CRESCENTE e DESCRESCENTE</h3>";
//sort($number);
//rsort($number);
//print_r($number);
echo"<h3>ORDENAR CRESC E DECRESC MANTENDO A CLASSIFICAÇÃO</h3>";
//asort($number);
arsort($number);
echo '<pre>';
print_r($number);
echo '</pre>';
echo"<h3>COLAR (GLUE), JUNTAR OU IMPLODIR</h3>";
$nomes = ['Walls', 'Pereira', 'da', 'Silva'];
$nome = implode(' ', $nomes);
echo $nome;*/

function ast(){
    for($a=1; $a <= 64; $a++){
        echo '*';
    }
    echo "<br/>";
}
/*echo"<h3>DATA E HORA</h3>";
echo time()."<br/>";// mostra a data em ms desde a data zero
// data zero: 01/01/1970 PHP E JS 
echo date('d/m/Y')."<br/>";//data formato brasil
echo date('d/m/Y H:i:s')."<br/>";//data com hora // brasil é -3h
//o meu servidor esta configurado nesse padrao +3
echo date('d')."<br/>";//dia do mês // ver documentação php
//php.net/manual/pt_BR/function.date.php
echo date('D')."<br/>";
echo date('z')."<br/>";
//PADRÃO INTERNACIONAL date('Y-m-d');
//SEMPRE Q FOR SALVAR DATA, SALVAR NO FORM INTERNACIONAL
//EX FORMATAR A DATA DO JEITO QUE QUERO ABAIXO
$data = '2021-09-12';
$time = strtotime($data);
echo date('d/m/Y', 0)."<br/>";//O ZERO É A QTD DE TIME QUE COLOCO OU SEJA IRÁ RETORNAR PRA DATA ZERO 01-01-1970
echo date('d/m/Y', $time)."<br/>";//mostra a data atual no formato que quero
echo date('d/m/Y', strtotime($data))."<br/>";;//forma reduzida*/
/*
echo "Exercício"."<br/>";
ast();
$data  = date('d/m/Y'); 
$dia = date('N');

switch ($dia){
    case '0':
        echo 'Domingo';
        break;
        case '1':
            echo 'Segunda-feira';
            break;
            case '2':
                echo 'Terça-feira';
                break;
                case '3':
                    echo 'Quarta-feira';
                    break;
                    case '4':
                        echo 'Quinta-feira';
                        break;
                        case '5':
                            echo 'Sexta-feira';
                            break;
                            case '6':
                                echo 'Sábado';
                                break;
                                case '7':
                                    echo 'Domingo';
                                    break; 
}*/
/*/include('abc.php');//o include vai mostrar o erro ma ABRE o arquivo
//require('abc.php');//vai acusar um erro pois o arquivo não existe e IMPEDE de abrir
require('config.php');//não tem nada visual então nao aparece nada do config
require_once('./template/header.php');
require_once('./template/header.php');
require_once('./template/header.php');//experimente dar o require 2x no header
//para impedir isso aplique o require_once
echo "Conteúdo do Site..."."<br/>";
//COMO COLOQUEI NO REQUIRE O CONFIG, POSSO EXIBIR OS DADOS DO CONFIG
echo "NOME DO USUÁRIO: ".$usuario;*/
<a href="./paginas/home.php">HOME</a>
<a href="./paginas/sobre.php">SOBRE</a>