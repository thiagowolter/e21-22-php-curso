<!-- ephp_007.php  -->

<!-- 7. Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado.  -->

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
    echo 'O numero informado foi: ' . $number;
}
?>