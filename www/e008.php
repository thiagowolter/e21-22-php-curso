<!-- e008.php -->

<?php

$umidade = 91 ; //declaracao de variavel numerica

// teste se vai chover, se umidade > 90, true, inferior, false
$vai_chover = ($umidade > 90);

if ($vai_chover){
    echo 'ficar em casa';
}

// também sao considarados falsos em comparacao a booleanos:
// - inteiro 0
// - ponto flutuante 0.0
// - string vazia
// - array vazia
// - objeto sem elementos
// - tipo null

$var_inteiro = 4;
if ($var_inteiro){
    echo '<br> ok, entrou aqui';
}

?>