<!-- ephp_025.php  -->

<!-- 25. Crie um programa que pede ao usuário um número qualquer, em seguida retorno se este número é primo ou não, caso não, retorne também quantas vezes esse número é divisível.  -->

<form action="" method="POST">
    Insira um numero: <input type="number" name="number">
    <input type="submit" name="enviar">
</form>
<?php 
$number = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST['number'];
}
$divisores = 0;
for($i = 1; $i <=$number; $i++){
    if ($number % $i ==0){
        $divisores += 1;
    }
}
if ($divisores ==2){
    echo $number . ' é primo!';
}else{
    echo '<br>' . $number . ' não é primo! e....';
    echo '<br>' . $number . ' é divisivel ' . $divisores . ' vezes!';
}
?>