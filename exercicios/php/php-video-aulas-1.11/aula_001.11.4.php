<!-- aula_001.11.4.php -->

<!-- Passagem de Parametros --> 
<!-- funcao  
2 tipos diferentes de passagem : 
    by value  (por valor)
    by reference (por referencia)

Quando eu passo um valor dentro da função -- a função recebe como variavel interna (não altera o original )
 -->

<?php
function incrementa($variavel,$valor){
    $variavel += $valor;
}

$a = 10 ;
incrementa($a,20);
echo '<br> o valor é ' , $a; 

// Resultado = 10:
?>

<?php
function incrementa2(&$variavel,$valor){
    $variavel += $valor;
}

$a = 10 ;
incrementa2($a,20);
echo '<br> o valor é ' , $a;
// Me passem na aula o valor do segundo $a 

?>

<?PHP
 // PASSAGEM DE PARAMETROS COM VALORES DEFAULT (OU PADRAO

function incrementa3(&$variavel,$valor=40){
    $variavel += $valor;
}

$a = 10 ;
incrementa3($a);
echo '<br>o valor é ' , $a;
// RESULTADO SERÁ 50 
?>







