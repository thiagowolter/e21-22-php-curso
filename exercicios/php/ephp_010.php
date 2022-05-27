<!-- ephp_010.php  -->

<!-- 10. Mostre o tamanho da lista de nomes, o numero de elementos da lista de nomes, mostre separadamente apenas o terceiro elemento desta lista.   -->

<?php
    $nomes = array('Thiago','Jose','Pedro','Gabriel','Andrea');

    echo 'o tamanho da lista nomes é: ', var_dump($nomes);
    echo '<br><br>';
    echo 'O numero de elementos na lista é: ' . sizeof($nomes);
    echo '<br><br>';
    echo 'O terceiro elemento é: ' . $nomes[2];
    
?>