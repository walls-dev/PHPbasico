<?php
class Post {
protected int $id;
private int $likes = 0;

protected function setId ($i){
    $this->id = $i;
}
public function getId (){
    return $this->id;
}
public function setLikes($n){
    $this->likes = $n;
}
public function getLikes(){
    return $this->likes;
}
}
#### A CLASSE FOTO IRÁ HERDAR TODAS AS PROPRIEDADES DA CLASSE POST
#### SERVE PARA REAPROVEITAMENTO DE CÓDIGOS
////PRIVATE E PROTECTED
// SE EU ALTERAR O CONSTRUCT OU O SET DA HERANÇA POR EXEMPLO
// SE TIVER A CLASSE COMO PROTECTED - TUDO BEM
// PORÉM SE TIVER PRIVADA, NAO CONSEGUE ALTERAR
// NA MINHA CONCLUSÃO A PRIVADA É MAIS SEGURA
class Foto extends Post {
    private $url;

    public function __construct($id){
        $this->setId($id);
    }
    public function setUrl($u){
        $this->url = $u;
    }
    public function getUrl(){
        return $this->url;
    }

}
$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('abc');

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." Likes - ".$foto->getUrl();