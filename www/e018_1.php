<!-- e018 01.php  -->
<!-- operadores de ATRIBUIÇÕES  -->
<?php
$x -=5; 
print($x);
echo "<br>"; 
$x = $x - 8; 
print($x);
echo "<br>"; 
// multiplicação e divisão 
$x *=2; 
print($x);
echo "<br>"; 
$x = $x * 8; 
print($x);
echo "<br>"; 
// multiplicação e divisão 
$x /=2; 
print($x);
echo "<br>"; 
$x = $x / 8; 
print($x);
echo "<br>"; 

echo "xxxxxxx<br>";

print $x++.''; // retorna 100 e incrementa para 101
echo "<br>"; // pula linha
print $x;  // retorna 101 e não incrementa nada... 
echo "<br>"; // pula linha
print ++$x.''; // incrementa para 102 e imprime 
echo "<br> ";
print --$x ; 
echo "<br> ";
print --$x ; 
echo "<br> ";
print --$x ; 
echo "<br> ";
print --$x ; 
echo "<br> ";
print --$x ; 
echo "<br>";
print $x; 
?>