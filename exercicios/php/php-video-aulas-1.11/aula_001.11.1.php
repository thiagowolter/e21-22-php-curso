<!-- aula_001.11.1.php -->

<!-- FUNÇÃO é pedaço de codigo. 
Objetivo Especifico. 
Encapsulado. 
Retorna um dado conforme os parametros enviados.  -->

<!-- Re-utilização de código. -->

<!-- 
    parametros tem a funçao de receber (argumentos) separados por virgulas (,) 

    function nome_da_funcao(lista de argumentos ou chamamos de lista de parametros){
        ... codigo ..
        ... codigo ... 
        return (integer, string, array, objeto, etc)
    } 
-->

<?php
    function soma($arg1,$arg2,$arg3,$arg4){
        $valor = $arg1 + $arg2 + $arg3 + $arg4;
        return $valor; 
    }
    echo soma(1,2,3,4);
    echo '<br>==============================';
    function imc($peso,$altura){
        return $peso / ($altura * $altura);
    }
    echo "<br>O indice de massa corporal é " . imc(65,1.75);
    
?>


