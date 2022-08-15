<?php
require_once 'config.php';
$sql = "SELECT COUNT(*) AS T FROM CADASTRO";
$total = $cadastro->prepare($sql);
$total->execute();
$total_cad = $total->fetch(PDO::FETCH_ASSOC);



$query = "SELECT * FROM CADASTRO";
foreach($cadastro->query($query) as $pessoa){
    $soma += $pessoa['CADASTRO_IDADE'];
}
$media = $soma / $total_cad['T'] ;

echo 'Cadastrados: ' . $total_cad['T'] . ' | '. 'Média de idade: '. $media;




?>