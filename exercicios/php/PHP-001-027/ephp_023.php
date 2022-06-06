<!-- ephp_023.php  -->

<!-- 23. Crie um programa que realiza a contagem regressiva de 20 segundos: (from time import sleep) -->

<?php 
echo 'começou: ' , date('h:i:s') , '<br>';
sleep(20);
echo 'terminou: ' , date('h:i:s') , '<br>';

for ($i=0;$i<21;$i++){
    sleep(1);
    echo $i . '<br>';
}
?>