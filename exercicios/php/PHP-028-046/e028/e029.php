
<form action="" method="POST">
    Nome: <input type="text" name="nome" placeholder="nome">
    idade: <input type="number" name="idade" placeholder="idade">
    CEP: <input type="text" name="cep" placeholder="CEP">
    <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<?php

if($_SERVER['REQUEST_METHOD' == 'POST']){
$name = $_POST['nome'];
$age = $_POST['idade'];
$cep = $_POST['cep'];
}


include 'e028.php';   
foreach($cadastro as $indice){
    foreach($indice as $dado => $valor){
        echo '<br>' . $dado . ': '. $valor ;
    }
}

?>