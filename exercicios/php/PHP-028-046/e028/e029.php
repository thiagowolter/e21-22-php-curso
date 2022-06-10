<?php
session_start();
if(!isset($_SESSION["required"])){
    $_SESSION['required'] = true;
    require_once('e028.php');
    $_SESSION['cadastro'] = $cadastro;
}
?>

<form action="" method="POST">
    Nome: <input type="text" name="nome" placeholder="nome">
    idade: <input type="number" name="idade" placeholder="idade">
    CEP: <input type="text" name="CEP" placeholder="CEP">
    <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<?php
 

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

foreach($_SESSION['cadastro'] as $indice){
    echo '<br>';
    foreach($indice as $dado => $valor){
        echo '<br>' . $dado . ': '. $valor ;
    }
}

?>