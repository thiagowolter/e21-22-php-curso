<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<!-- Faça com que o valor padrão (ou default) do form seja informado proveniente de uma variavel PHP -->
<!-- Plus: faça com que os valores de num1 e num2 sejam provenientes de uma lista de argumentos -->

<?php $num1 = 52; $num2 = 106;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['num1']) || empty($_POST['num2'])){
        $num1 = 52;
        $num2= 106;
    } else {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    }
}
?>
<form action="" method="post">
    <input type="text" name="num1" value="<?php echo $num1?>" onfocus="this.value=''">
    <input type="text" name="num2" value="<?php echo $num2;?>" onfocus="this.value=''">
    <input type="submit" name="enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "O primeiro numero é ", $num1 ."<br>";
    echo "O segundo numero é ", $num2 ."<br>" ;
    $res = $num1 + $num2;
    echo "O resultado da soma dos valores é: " ,  $res;
}
?>



