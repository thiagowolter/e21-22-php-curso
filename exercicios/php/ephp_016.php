<!-- ephp_016.php  -->

<!-- 16. Crie uma variável com valor inicial 0, enquanto o valor dessa variável for igual ou menor que 10, exiba em tela o proprio valor da variavel. A Cada execução a mesma deve ter seu valor atualizado, incrementado em 1 unidade.   -->

<?php 
$var = 0;
while($var <= 10){
    $var = $var + 1;
    echo '<br>', $var;
}
?>