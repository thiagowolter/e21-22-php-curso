<!-- AULA_001.9.3  -->
<!-- FOR  -->

<!-- Estrutura de controle que estabelece um laço de repetição 
baseado em um contador. -->

<!-- for(expr1;expr2;expr3){
    ..
    ..
}
expr1 - Valor inicial da variavel contadora (de:)
expr2 - Condição de execução. (verdadeiro) (ate)
expr3 - Valor a ser incrementado. (passo:) -->

<?php
for ($i=1;$i<=10;$i++){
    print $i; 
}
?>

<?php
echo '<br>================================================================';
for ($i=0;$i<=5;$i++){
    for ($j=0;$j<=5;$j++){
        print "<BR> I: $i, J:$j"; 
    }
}

// Refaça com contagem regressiva

?>

<?php 
echo '<br>================================================================';
for ($i=5;$i>=0;$i--){
    for ($j=5;$j>=0;$j--){
        print "<BR> I: $i, J:$j"; 
    }
}
?>












