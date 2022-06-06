<!-- ephp_018.php  -->

<!-- 18. Crie uma lista com 8 elementos de uma lista de compras de supermercado, por meio de um laço de repetição for, liste individualmente cada um dos itens dessa lista.  -->

<?php 

$lista = array('couve','banana','feijao','arroz','carne','maça','macarrao','bolacha');

foreach ($lista as $item ){
    echo ' <br>- ', $item;
}

?>