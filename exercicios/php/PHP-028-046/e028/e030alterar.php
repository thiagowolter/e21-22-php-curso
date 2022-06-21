<head>
    <link rel="stylesheet" href="style.css">
</head>
<nav>
    <h1>ALTERAR CADASTRO</h1>
</nav>
<header>
<?php
session_start();
require_once 'e028.php';
$alterar = $_SESSION['cadastro'][$_GET['ID']];
?>
<form action="" method="POST" class="cad">
    Nome: <input type="text" name="nome" placeholder="nome">
    Idade: <input type="number" name="idade" placeholder="idade">
    CEP: <input type="text" name="CEP" placeholder="00000-000">
    Saldo: <input type="text" name="saldo" placeholder="R$ 00,00">
    <input type="submit" name="alterar" value="Alterar" class="btn_cad">
</form>
<?php
 if (isset($_POST['alterar'])) {
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $cep=$_POST['CEP'];
    $saldo=$_POST['saldo'];
 
    $_SESSION['cadastro'][$_GET['ID']]['nome'] = $nome;
    $_SESSION['cadastro'][$_GET['ID']]['idade'] = $idade;
    $_SESSION['cadastro'][$_GET['ID']]['CEP'] = $cep;
    $_SESSION['cadastro'][$_GET['ID']]['saldo'] = $saldo;

    echo $b . "Retornando em 3 segundos ...";    
    header("refresh: 2;e029.php");
 }
?>
</header>