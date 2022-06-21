<head>
    <link rel="stylesheet" href="style.css">
</head>
<header>
<?php
require_once('e028.php');
session_start();
?>
<nav>
    <h1>CADASTRO DE PESSOAS</h1>
</nav>

<form action="" method="POST" class="cad">
    Nome: <input type="text" name="nome" placeholder="nome">
    Idade: <input type="number" name="idade" placeholder="idade">
    CEP: <input type="text" name="CEP" placeholder="00000-000">
    Saldo: <input type="text" name="saldo" placeholder="R$ 00,00">
    <input type="submit" name="cadastrar" value="Cadastrar" class="btn_cad">
</form>

<?php
 if(!isset($_SESSION["cadastro"])){
    $_SESSION['cadastro'] = $cadastro;
}
// Restaurar cadastro
if (isset($_POST['restaurar'])) {        
    $_SESSION['cadastro'] = $cadastro;
}

 if (isset($_POST['cadastrar'])) {
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $cep=$_POST['CEP'];
    $saldo=$_POST['saldo'];

    $cadastro_novo_cadastro=array(
            "nome" => $nome,
            "idade" => $idade,
            "CEP" => $cep,
            "saldo" => $saldo
    );      
    array_push($_SESSION['cadastro'], $cadastro_novo_cadastro); 
}
?>
<div class="list">
<?php 
foreach($_SESSION['cadastro'] as $indice => $pessoa){
    echo '<br>';
    echo "Nome: " . $pessoa['nome'] .$b;
    echo "Idade: " . $pessoa['idade'] . $b;
    echo "CEP: " . $pessoa['CEP'] . $b;
    include('e032saldo.php');
    echo "<a href=e031apagar.php?Delete=" . $indice . "&Nome=" . urlencode($pessoa['nome'])  . "&Idade=" . $pessoa['idade'] . "&CEP=". $pessoa['CEP'] . "><button>Excluir Cadastro</button></a>" . $b;
    echo"<a href=e030alterar.php?ID=".$indice ."><button>Editar Cadastro</button></a>" . $b;
    }
?>
</div>
<br><br><br>
<form action="" method="POST">
    <input type="submit" name="restaurar" value="Restaurar Cadastro" class="btn_rest">
</form>
</header>
<footer>
<?php
include_once('e033total.php');
include_once('e034media.php');
?>
</footer>




<!-- "Nome: " . $pessoa['nome'] . "<a href=e031.php?Delete=" . $indice . "&Nome=" . $pessoa['nome'] . ">   Excluir  </a>" . $b; -->