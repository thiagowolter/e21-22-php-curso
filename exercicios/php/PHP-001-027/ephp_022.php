<!-- ephp_022.php  -->

<!-- 22. Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        Escolha um numero: <input type="number" name="number">
        <input type="submit">
    </form>
</body>
</html>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST['number'];
    }
    for ($i =0; $i<11; $i++){
        echo $i*$number . '<br>';
    }
?>