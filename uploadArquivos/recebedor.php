<?php
//echo '<pre>';
//print_r($_FILES);//VARIÁVEL GLOBAL
/*Array
(
    [arquivo] => Array
        (
            [name] => SISGRU-export-20210812.txt
            [type] => text/plain
            [tmp_name] => C:\wamp64\tmp\phpB3D8.tmp
            [error] => 0
            [size] => 31085
        )

)*/
//QUERO MOVER DA PASTA TEMPORÁRIA DO SERVIDOR PARA O MEU SISTEMA
//funcao move_uploades_file
//recebe dois parametros
//o 1º é onde está na pasta temporaria [ arquivo é o name do input][tmp_name]
//o 2º é onde que mover o arquivo nome da pasta + o nome do arquivo
//
$nome = $_FILES['arquivo']['name'];//usando o nome original
move_uploaded_file($_FILES['arquivo']['tmp_name'],'uploadArquivos/'.$nome);
