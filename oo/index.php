<?php
################### CLASS ####################
#####     public, protected e private    #####
//public e protected NÃO SÃO ACESSÍVEIS DO LADO DE FORA
//se tentar acessar o que eu exibir na tela não será permitido COM ESSES DOIS
//então qual o sentido de usar uma propriedade private
//simples: caso vc use essa propriedade apenas internamente
//SEGURANÇA: PROTEJER A PROPRIEDADE DE INFLUENCIAS EXTERNAS
//TYPED PROPERTY A PARTINR DO PHP 7.4 int array string
// O CONSTRUTOR SERVE COMO REAPROVEITAMENTO DE DADOS
//TODA VEZ QUE UM OBJETO É CRIADO O CONSTRUCT É EXECUTADO
//(ENCAPSULAMENTO) setters and  getters É A FORMA CORRETA DE PEGAR 
//E SETAR UM DADO POIS É POSSÍVEL TRATAR ANTES DA SUA EXECUÇÃO
//O ENCAPSULAMENTO PROTEGE AS PROPRIEDADES DE AÇÕES EXTERNAS OU AÇÕES que
//VAO PREJUDICAR O FUNCIONAMENTO DO SISTEMA
//O ENCAPSULAMENTO RECOMENDA QUE NÃO SE FAÇA:
//$post1->author = 'Walls'; SETAR DESSA FORMA
//$post2->author; PEGAR E EXIBIR DESSA FORMA
//DEPOIS DE SETAR E GETTAR PRECISA CRIAR ESSES DOIS MÉTODOS
//tratando com esse encapsulamento eu posso por exemplo, tratar a variavel dentro do objeto
//EXEMPLO AO SETAR, COLOCAR O NOME COM A PRIMEIRA LETRA EM MAIUSCULO
//PARA CADA UMA DAS PROPRIEDADE EX: ID, LIKE, COMMENTS... CRIAR UM SET E GET
//MESMO QUE EU TRANSFORME A PROPRIEDADE PRIVADA, QDO VC DÁ UM GET ELE ACESSA O SET QUE É PUBLIC
//OU SEJA, O UNICO QUE PODE ALTERAR AS CARACTERISTICAS DA PROPRIEDADE PRIVADA É O SET
################## CLASSE  ####################
class Post{
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function __construct($postId){
        $this->id = $postId;
        //consultar banco de dados para obter inf do post $id
        
    }

    public function aumentarLike(){
        $this->likes++;
    }
    public function diminuirLike(){
        $this->likes--;
    }
    public function setAuthor($n){
        if(strlen($n) >= 3){
        $this->author = ucfirst(strtolower($n));
    }
}
    public function getAuthor(){
        return $this->author;
    }
}
################# OBJETO ######################
$post1 = new Post(1);
$post1->setAuthor('vIcToR');//CORRETO
//$post1->author = 'Walls'; NÃO RECOMENDADO

$post2 = new Post(2);
$post2->setAuthor('sandra');//CORRETO
//$post2->author = 'Sandra'; NÃO RECOMENDADO

###############################################
echo "POST 1: ".$post1->likes." likes ".$post1->getAuthor()."<br/>";
echo "POST 2: ".$post2->likes." likes ".$post2->getAuthor()."<br/>";