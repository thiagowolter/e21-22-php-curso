<!-- operadores relacionais  -->

<?php 
$a = 1234;
$b = '1234';
if($a==$b){
    echo '$a e $b sao iguais';
}
else if ($a!=$b){
    echo '$a e $b são diferentes';
}
?>
<?php
echo '<br>';
$c = '1234';
$d = 1234;
if($c === $d ){
    echo 'são iguais';
} 
else if ($c !== $d){
    echo 'são diferentes';
}
?>

<?php 
echo '<br>=========================== <br>';
$e = 0;
if ($e == FALSE){
    echo ' $e é falso';
}
if ($e === FALSE){
    echo '<br> $e é FALSE e do tipo boolean';
}
if ($e === 0 ){
    echo '<br> $e é zero mesmo kkk';
}

?>