<!-- e012.php  -->

// Objeto

<?php 

$carro = new stdClass;
$carro->modelo='palio';
$carro->ano='2002';
$carro->cor='desbotado';

echo "<br>";
print_r($carro);
echo "<br>";
print $carro->modelo;
echo "<br>";
print $carro->ano;
echo "<br>";
print $carro->cor;
echo "<br>";


?>