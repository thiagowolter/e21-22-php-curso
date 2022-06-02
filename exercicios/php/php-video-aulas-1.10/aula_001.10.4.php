<!-- aula_001.10.4.php -->

<!-- require_once -->

<?php
$a = 0;
while ($a <=5){
    require_once 'tools.php'; # gera MORTE do script . ...se não encontrar o arquivo
    echo "<BR> Quadrado de 4 é:" . quadrado($a);
    $a++; 
}
?>    