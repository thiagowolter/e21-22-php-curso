<!-- ephp_008.php  -->

<!-- 8. peça para que o usuario digite um numero, em seguida o converta para float, exibindo em tela tanto o numero em si como o seu tipo de dado.   -->

<html>
    <body>
        <form method="post">
            Informe um numero: <input type="number" name="snumber">
            <input type="submit">
        </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST['snumber'];
    $float_number = floatval($number);
    echo 'O numero digitado foi: '. $float_number;
    echo '<br>O tipo de dado é: ' . gettype($float_number);
}
?>