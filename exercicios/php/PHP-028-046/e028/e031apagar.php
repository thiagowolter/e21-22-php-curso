<head>
    <link rel="stylesheet" href="style.css">
</head>
<nav>
    <h1>APAGAR CADASTRO</h1>
</nav>
<header>
<?php
session_start();
require_once 'e028.php';
?>
<div class="list">
<?php
if ($_GET['Nome']) {       
    echo "Apagando chave: "  . $_GET['Delete'] . $b . " Nome: " . $_GET['Nome'] . $b . $b;
    $key = array_search($_GET['Nome'],array_column($_SESSION['cadastro'],'nome'));
    // echo $b."Key para apagar:".$key.$b ; 
    array_splice($_SESSION['cadastro'],($key), 1);
    // echo "a chave : " . $_GET['Nome'] . " foi excluida" . $b;
    echo $b . "Retornando em 3 segundos ...";    
    header("refresh: 2;e029.php");
}
?>
</div>
</header>








