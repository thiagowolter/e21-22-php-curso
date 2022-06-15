<?php
session_start();
require_once 'e028.php';

if ($_GET['Nome']) {       
    echo "Apagando chave: " . $_GET['Delete'] . " Nome: " . $_GET['Nome'] . $b . $b;
    $key = array_search($_GET['Nome'],array_column($_SESSION['cadastro'],'nome'));
    // echo $b."Key para apagar:".$key.$b ; 
    array_splice($_SESSION['cadastro'],($key), 1);
    // echo "a chave : " . $_GET['Nome'] . " foi excluida" . $b;
    echo $b . "Retornando em 3 segundos ...";    
    header("refresh: 5;e029.php");
}









