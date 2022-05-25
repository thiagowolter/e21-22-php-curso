<!-- ephp_009.php  -->

<!-- 9.  crie uma lista com 5 nomes de pessoas, e imprima os nomes  -->

<?php
    $nomes = array('Thiago','Jose','Pedro','Gabriel','Andrea');

    foreach ($nomes as $nome) {
        echo '<br> - ', $nome;
    }
?>