<!-- ephp_024.php  -->

<!-- 24. Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares ao final do processo exiba em tela quantos números impares foram encontrados nesse intervalo, assim como a soma dos mesmos:  -->


<?php
$impares = array();
// Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares


for($i= 1; $i<=100; $i++){
    if($i % 2 !=0){
        array_push($impares, $i);
        echo '<br>' . $i;
    } 
}
// ao final do processo exiba em tela quantos números impares foram encontrados nesse intervalo
echo '<br>=======================================================<br>';
$total = count($impares);
echo 'O total de impares nesse intervalo é: ' . $total;

// assim como a soma dos mesmos:
echo '<br>=======================================================<br>';
$soma = array_sum($impares);
echo 'O total da soma nesse intervalo é: ' . $soma;
?>