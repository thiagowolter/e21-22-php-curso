<!-- e011e.php -->

<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
pegar os dados de num1 e num2 de um form. COM METODO = GET
-->

<?php
if (isset($_GET['num1'])) {
    $num1 = ($_GET['num1']);
} else {
    $num1 = 52;
}
if (isset($_GET['num2'])) {
    $num2 = ($_GET['num2']);
}else {
    $num2 = 106;
}
?>


<form action="" method="GET">
    Numero 1: <input type="number" name="num1" value="<?php echo $num1 ?>">
    Numero 2: <input type="number" name="num2" value="<?php echo $num2 ?>">
    <input type="submit">
</form>

<?php
$res = $num1 + $num2;
echo ' A soma dos valores é: ', $res;
?>