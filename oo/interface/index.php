<?php
//UTILIZADA PARA TROCA DE BANCO DE DADOS POR EXEMPLO
//DO MYSQL PARA ORACLE POR EXEMPLO
Interface Database {
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB {
    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com Mysql";
    }
    public function alterarProduto(){

    }
}
class OracleDB {
    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com Oracle";
    }
    public function alterarProduto(){

    }
}
$db = new MysqlDB();
$db->adicionarProduto();

