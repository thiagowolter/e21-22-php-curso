
<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
11.b pegar os dados de num1 e num2 de um form. (preservando)
11.c pegar os dados de num1 e num2 passados pela url. 
-->
<!-- By Denize -->

<body>
    <?php

    echo "<br>REQUEST -----: " . ($_SERVER["REQUEST_METHOD"]) . "<br>";

    echo "<BR>Fase 1 <br>";
    echo "PHP : Variaveis Num1 e Num2   : " . $num1 . " : " . $num2 . "<br>";
    echo "GET : Num1 e Num2--: " . ($_GET['num1']) . ":--:" . ($_GET['num2']) . "<br>";
    echo "POST: Num1 e Num2--: " . ($_POST["input_user1"]) . ":--:" . ($_POST["input_user2"]) . "<br>";
    

    $num1 = 0;
    $num2 = 0;

    echo "<BR>Fase 2 <br>";
    echo "PHP : Variaveis Num1 e Num2   : " . $num1 . " : " . $num2 . "<br>";
    echo "GET : Num1 e Num2--: " . ($_GET['num1']) . ":--:" . ($_GET['num2']) . "<br>";
    echo "POST: Num1 e Num2--: " . ($_POST["input_user1"]) . ":--:" . ($_POST["input_user2"]) . "<br>";
    


    if (isset($_GET['num1'])) {
        $num1 = ($_GET['num1']);
    }
    if (isset($_GET['num2'])) {
        $num2 = ($_GET['num2']);
    }

    echo "<BR>Fase 3 <br>";
    echo "PHP : Variaveis Num1 e Num2   : " . $num1 . " : " . $num2 . "<BR>";
    echo "GET : Num1 e Num2--: " . ($_GET['num1']) . ":--:" . ($_GET['num2']) . "<br>";
    echo "POST: Num1 e Num2--: " . ($_POST["input_user1"]) . ":--:" . ($_POST["input_user2"]) . "<br>";
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["input_user1"])) {
            $num1 = $_POST["input_user1"];
        }
        if (isset($_POST["input_user2"])) {
            $num2 = $_POST["input_user2"];
        }
    }

    echo "<BR>Fase  4 <br>";
    echo "PHP : Variaveis Num1 e Num2   : " . $num1 . " : " . $num2 . "<BR>";
    echo "GET : Num1 e Num2--: " . ($_GET['num1']) . ":--:" . ($_GET['num2']) . "<br>";
    echo "POST: Num1 e Num2--: " . ($_POST["input_user1"]) . ":--:" . ($_POST["input_user2"]) . "<br>";
    

    ?>
    <form method="post">
        Número - 1: <input type="number" name="input_user1" step="any" value="<?php echo $num1 ?>" />
        Número - 2: <input type="number" name="input_user2" step="any" value="<?php echo $num2 ?>" />
        <input type="submit">
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['input_user1'];
    $num2 = $_POST['input_user2'];
    $resultado = $num1 + $num2;
    echo "<br> $num1 + $num2 = $resultado <br>";
}

?>