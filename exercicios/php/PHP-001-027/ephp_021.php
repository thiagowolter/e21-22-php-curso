<!-- ephp_021.php  -->

<!-- 21. Crie um programa que realiza a Progressão Aritmetica de 20 elementos, com primeiro termo e razão definidos pelo usuário.  (Progressão aritmética - Uma progressão aritmética é uma sequência numérica em que cada termo, a partir do segundo, é igual à soma do termo anterior com uma constante r. O número r é chamado de razão ou diferença comum da progressão aritmética.)  -->

<form action="" method="POST">
    Termo: <input type="number" name="termo">
    Razao: <input type="number" name="razao">
    <input type="submit" name="enviar">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['termo'];
    $r = $_POST['razao'];
    for ($i = 1; $i <= 20; $i++) {
        $a = $a + $r;
        echo $a . "\n";
        
    }
}

?>