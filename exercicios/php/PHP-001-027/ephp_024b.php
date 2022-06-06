<?php
$total=0;
$soma=0;
for ($x = 1; $x <= 100; $x++) {
    if ($x % 2 == 1) {
        echo "$x <br>";
        $total++;
        $soma+=$x;
    }
}
echo "<br /> O total de números ímpares foi de $total e a sua soma foi de $soma";
?>