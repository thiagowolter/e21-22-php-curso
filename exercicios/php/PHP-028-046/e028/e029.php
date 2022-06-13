<?php
require_once('e028.php');
session_start();


?>

<form action="" method="POST">
    Nome: <input type="text" name="nome" placeholder="nome">
    idade: <input type="number" name="idade" placeholder="idade">
    CEP: <input type="text" name="CEP" placeholder="CEP">
    <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<?php
 if(!isset($_SESSION["cadastro"])){
    $_SESSION['cadastro'] = $cadastro;
}
// Restaurar cadastro
if (isset($_POST['restaurar'])) {        
    $_SESSION['cadastro'] = $cadastro;
}
// 031. Excluir do Cadastro


 if (isset($_POST['cadastrar'])) {
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $cep=$_POST['CEP'];

    $cadastro_novo_cadastro=array(
            "nome" => $nome,
            "idade" => $idade,
            "CEP" => $cep
    );      
    array_push($_SESSION['cadastro'], $cadastro_novo_cadastro); 
}

foreach($_SESSION['cadastro'] as $indice => $pessoa){
    echo '<br>';
    echo "Nome: " . $pessoa['nome'] . "<a href=excluir.php?Delete=" . $indice . "&Nome=" . $pessoa['nome'] . ">   Excluir  </a>" . $b;  
    echo "idade: " . $pessoa['idade'] . $b;
    echo "CEP: " . $pessoa['CEP'] . $b;
    }

?>
<form action="" method="POST">
    <input type="submit" name="restaurar" value="Restaurar">
</form>