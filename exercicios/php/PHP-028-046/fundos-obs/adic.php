<?php
require_once 'base.php';
if(isset($_POST['adicionar_dados']))
    $valuetitulo = $_POST['titulo'];
    $valueurl = $_POST['url'];
    $valueframe = $_POST['frame'];

    $new_cad = array(
        "titulo" => $valuetitulo,
        "url" => $valueurl,
        "frame" => $valueframe
    );

    array_push($_SESSION['cadastro'], $new_cad);
?>