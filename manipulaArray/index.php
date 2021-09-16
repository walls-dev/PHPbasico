<?php
/*/$array = ['1', '2', '3'];
$array = range(900001, 900005);//range tem 2 parametros
// o 1º é o que vai começar e o 2º é o que vai terminar
// o 3º nao é obrigatorio é de quanto em quanto ele salta: ex: 2
// pode ser letra também
foreach($array as $item){
    echo $item."<br/>";
}*/
//KEY EXISTS
$candidato = [
        'nome' => 'Walls',
        'idade' => 35,
        'exame' => 'EAGS 2020',
        'oVR' => true,
        'cor' => 'negra',
        'espec' => 'SIM'
];
/*if(key_exists('idade', $candidato)){
$idade = $candidato['idade'];
echo "Idade: ".$idade." anos"."<br/>";
}else{
    echo "Não tem idade";
}*/
echo "<pre>";
print_r($candidato);
echo "</pre>";
#############################################
##     ARRAY_KEYS / ARRAY_VALUES           ##
#############################################
$chaves = array_keys($candidato);
echo "CHAVES";
echo "<pre>";
print_r($chaves);
echo "</pre>";
for($n = 1; $n <= 45; $n++){
    echo "#";
}
echo "<br/>";
$valores = array_values($candidato);
echo "VALORES";
echo "<pre>";
print_r($valores);
echo "</pre>";
#############################################
##     COLOCANDO EM UMA TABELA             ##
#############################################
?>
<table border="1">
<?php foreach($candidato as $chave => $valor): ?>
    <tr>
        <th><?php echo $chave;?></th>
        <td><?php echo $valor;?></td>
    </tr>
<?php endforeach; ?>
</table>
#############################################
##   COLOCANDO EM UMA TABELA HORIZONTAL    ##
#############################################
<?php
echo "<br/>";
$array = [
        'nome' => 'Walls',
        'idade' => 36,
        'empresa' => '41W15',
        'cor' => 'negra',
        'profissao' => 'SIM',
        'TESTE' => 'OK',
];
$chaves = array_keys($array);
$valores = array_values($array);

?>

<table border="1">
    <tr>
        <?php foreach($chaves as $chave): ?>
                <th><?php echo $chave;?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
                <td><?php echo $valor;?></td>
        <?php endforeach; ?>
    </tr>
</table>