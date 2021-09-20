<?php
//A FORMA MAIS UTILIZADA DISPARADAMENTE PARA CONECTAR É A PDO
// PDO É UMA BIBLIOTECA QUE JÁ VEM HABILITADA PARA CONECTAR VÁRIOS BD
//OBS: O PDO É UMA CLASSE QUE VC PRECISA INSTANCIAR, OU SEJA, VC PODE
// CHAMAR DO QUE QUISER
//ELA RECEBE ALGUNS DADOS
// O 1º QUAL O TIPO DE BD - mysql como o nome do db;
//host: onde ele esta. No meu caso esta na porta 3308
//depois precisamos dizer o usuario e a senha
//PARA TESTAR, POSSO USAR UM METODO DO PROPRIO PDO QUE É A QUERY
//depois de executar a query, dou um fetchAll - fetch (pegue os dados) quais: all
//OBSERVE QUE AO DAR O PRINT_R OS DADOS SE REPETEM POIS NÃO FOI FEITA NENHUMA ASSOCIAÇÃO
//ENTÃO DEVO UTILIZAR DO PDO O FETCHALL NA CONSULTA $sql->fetchAll( PDO::FETCH_ASSOC) CONSTANTE ESTATICA;
$pdo = new PDO("mysql:dbname=b7web;host=localhost:3308", "root", "");
$sql = $pdo->query('SELECT * FROM usuarios');
echo "TOTAL: ".$sql->rowCount()."<br/>";//qtos registros existem na minha consulta
$dados = $sql->fetchAll( PDO::FETCH_ASSOC);
echo "<pre>";
print_r($dados);