<?php
require_once 'base.php';
?>

<?php
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];


    $cadastro_novo = array(
        "nome" => $nome,
        "idade" => $idade,
        "cep" => $cep,
        "saldo" => $saldo
    );
    array_push($_SESSION['cadastro2'], $cadastro_novo);
}
?>