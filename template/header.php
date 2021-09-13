<h2>Cabeçalho <?php echo $versao;?></h2>
<?php
if(isset($_COOKIE['nomeDoCookie'])){
    $nome = $_COOKIE['nomeDoCookie'];
    echo '<h2>'.$nome.'</h2>';
}
?>
<hr/>