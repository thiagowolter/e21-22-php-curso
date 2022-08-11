<?php
require_once 'config.php';
$soma = 0;
$query = "SELECT * FROM CADASTRO";
foreach($cadastro->query($query) as $pessoa){
    $soma += $pessoa['CADASTRO_IDADE'];
}
$media = $soma ;

echo 'Média de idade: '. $media;

?>