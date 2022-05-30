<!-- Faça com que o valor padrão (ou default) do form seja informado proveniente de uma variavel PHP -->
<!-- Plus: faça com que os valores de num1 e num2 sejam provenientes de uma lista de argumentos -->

<!-- Mudar para GET, caso não houver get, definir como 0 -->

<?php $num1 = 0; $num2 = 0;
if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
    }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['num1']) || empty($_POST['num2'])){
        $num1 = 0;
        $num2= 0;
    } else {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    }
}
?>
<form action="" method="POST">
    <input type="text" name="num1" value="<?php echo $num1?>" onfocus="this.value=''">
    <input type="text" name="num2" value="<?php echo $num2;?>" onfocus="this.value=''">
    <input type="submit" name="enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if(empty($_GET['num1']) || empty($_GET['num2'])){
        $num1 = 0;
        $num2= 0;
    } else {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        }
        $res = $num1 + $num2;
    echo "O resultado da soma dos valores $num1 + $num2 é: " ,  $res;
    }
    

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "O primeiro numero é ", $num1 ."<br>";
    echo "O segundo numero é ", $num2 ."<br>" ;
    $res = $num1 + $num2;
    echo "O resultado da soma dos valores $num1 + $num2 é: " ,  $res;
}
?>