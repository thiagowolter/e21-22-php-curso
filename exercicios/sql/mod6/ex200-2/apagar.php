<title>EXCLUIR</title>
<nav>
    <h1>EXCLUIR CADASTRO</h1>
</nav>
<?php
require_once 'head.php';


session_start();

if($_GET['nome']){
    echo 'Apagando chave: ' . $_GET['apagar'] . $b . 'Apagando nome: ' . $_GET['nome'];
    $chave = array_search($_GET['nome'],array_column($_SESSION['cadastro2'], 'nome'));
    array_splice($_SESSION['cadastro2'],($chave), 1);
    echo $b;
    echo 'Retornando para a página principal em ' . $tt .' segundos!';
    header("refresh: $tt; index.php"); 
}
?>