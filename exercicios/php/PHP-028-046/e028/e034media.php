<?php



$soma = 0;
foreach($_SESSION['cadastro'] as $indice => $pessoa){
    $soma += $pessoa['idade'];
}
$media = $soma /  count($_SESSION['cadastro']);

echo ' |  Média de idade do cadastro: '. $media;

?>