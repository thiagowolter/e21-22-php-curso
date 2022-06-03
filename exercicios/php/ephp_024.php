<!-- ephp_024.php  -->

<!-- 24. Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares ao final do processo exiba em tela quantos números impares foram encontrados nesse intervalo, assim como a soma dos mesmos:  -->
<?php
$i = 0;
$impares = array();
while(++$i <=100){
    if ($i % 2 != 0){
        echo '<br>', $i;
    }
}
?>