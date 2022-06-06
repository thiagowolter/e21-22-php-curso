<!-- ephp_017.php  -->

<!-- 17. Crie uma estrutura de repetição que percorre a string 'Projeto Entra21':  -->

<?php 
$e21 = 'Projeto Entra21';

$array = str_split($e21);

foreach($array as $val){
    echo '<br> - ' . $val;
}


?>