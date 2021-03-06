<?php
$alunos = [
        ['nome' => 'Arcrebiano', 'sexo' => 'M', 'nota' => 7],
        ['nome' => 'Beltrano', 'sexo' => 'M', 'nota' => 5],
        ['nome' => 'Ciclana', 'sexo' => 'F', 'nota' => 7],
        ['nome' => 'Deltrana', 'sexo' => 'F', 'nota' => 6],
        ['nome' => 'Euclides', 'sexo' => 'M', 'nota' => 8],
        ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
        ['nome' => 'Galinda', 'sexo' => 'F', 'nota' => 9]

];
//O ARRAY_REDUCE PASSA POR 2 PARAMETROS
//O PRIMEIRO É O ARRAY
//O SEGUNDO É UMA FUNÇAO QUE IRA SER EXECUTADA A CADA ITEM DO ARRAY
//EX: O TOTAL DE HOMENS DO ARRAY
function contar_m($subtotal, $item){
    if($item['sexo'] === 'M'){
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($alunos, 'contar_m');
//SOMA DAS NOTAS DOS HOMENS
function notas_m($subtotal, $item){
        if($item['sexo'] === 'M'){
        $subtotal += $item['nota'];
    }
    return $subtotal;
}
$notas_m = array_reduce($alunos, 'notas_m');
echo "Total de homens: ".$total_m."<br/>";
echo "Soma das notas dos homens: ".$notas_m."<br/>";
$media_m = $notas_m/$total_m;
echo "Média das notas dos homens: ".$media_m;