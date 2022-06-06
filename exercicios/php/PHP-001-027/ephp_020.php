<!-- ephp_020.php  -->

<!-- 20. Crie um programa que realiza a contagem de 0 a 20, exibindo apenas os numeros pares.  -->


<?php 
$i = 0;
while($i++ < 20){ 
    if($i % 2 == 0){
        echo '<br>', $i;
    }
}
?>