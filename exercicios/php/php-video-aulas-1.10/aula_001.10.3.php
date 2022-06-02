<!-- aula_001.10.3.php -->


<?php
$a = 0;
while ($a <=5){
    include_once 'tools.php'; # gera warning se não encontrar o arquivo
    echo "<BR> Quadrado de 4 é:" . quadrado($a);
    $a++; 
}
?>    
