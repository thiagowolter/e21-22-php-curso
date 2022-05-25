<!-- ephp_015.php  -->

<!-- 15. Solicite duas variaveis: num1 e num2 . 
    1.  verifique se o valor de num1 é maior que o de num2. 
    2.  Verifique se os valores de num1 e de num2 são iguais.
    3.  Verifique se os valores de num1 e de num2 são diferentes. 
    4.  Verifique se o valor de num é é igual ou menor que 100.
        5.  Verifique se os valores de num1 e de num2 são iguais ou menores que sem. 
        6.  Verifique se os valores de num1 ou de num2 são iguais ou maiores que 100:
        7.  Verifique se o valor de num1 consta nos elementos de lista1 Sendo num1=100 e lista1= [10,100,1000,10000,100000].
    8.  Verifique caso o valor de num1 for maior que o do segundo, exiba em tela uma mensagem de acordo, caso contrario, exiba em tela uma mensagem dizendo que o primeiro valor digitado é menor que o segundo. 
    9.  Verifique se num1 e num2 são PAR(es) ou se é IMPAR(es):--> 

    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <form method="post">
        Numero 1: <input type="number" name="num1">
        <br>
        Numero 2: <input type="number" name="num2">
        <input type="submit">
        <br>
    </form>
    </body>
</html>

<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
}
echo '<br>Voce digitou N1= ', $num1, ' e N2= ', $num2, '<br>';
if ($num1 > $num2){
    echo '<br>N1 é maior que N2';
} 
if ($num1 == $num2){
    echo '<br>N1 e N2 são iguais';
}
if ($num1 != $num2){
    echo '<br>N1 e N2 são diferentes';
}
if($num1 <= 100){
    echo '<br>N1 é menor ou igual a 100';
}
if($num1 <=100 && $num2 <=100){
    echo '<br>N1 e N2 são menores ou iguais a 100';
}
if($num1 >= 100 or $num2 >= 100){
    echo '<br>N1 ou N2 é maior ou igual a 100';
}
$lista = array(10, 100, 1000, 10000, 100000);

foreach($lista as $indice => $copiaIndice) {
    if($lista[$indice] == $num1) {
        echo '<br>O primeiro número corresponde a um dos indices do array "Lista"';
    }
}
if($num1 > $num2){
    echo '<br>N1 é maior que N2';
}elseif($num1 < $num2){
    echo '<br>N1 é menor que N2';
}
if($num1 % 2 == 0) {
    echo '<br>O primeiro número é par';
}else {
    echo '<br>O primeiro número é ímpar';
}
if($num2 % 2 == 0) {
    echo '<br>O segundo número é par<br>';
}else {
    echo '<br>O segundo número é ímpar';
}
?>