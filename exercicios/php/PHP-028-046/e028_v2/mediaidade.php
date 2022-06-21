<?php
$soma = 0;
foreach($_SESSION['cadastro2'] as $id => $pessoa){
    $soma += $pessoa['idade'];
}
$media = $soma /  count($_SESSION['cadastro2']);

echo 'Média de idade: '. $media;

?>