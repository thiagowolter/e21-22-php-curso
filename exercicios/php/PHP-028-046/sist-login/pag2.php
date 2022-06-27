<?php 
require_once 'cabec.php';
session_start();
?>

<nav>
    <a href="pag1.php">PAGINA 1</a>
    <a href="pag2.php">PAGINA 2</a>
</nav>

<h1>OLÁ MUNDO</h1><BR>

<H1>VOCE ESTÁ NA PAGINA 2</H1>

<form method='post'><button type='submit' name='restaurar'> LOGOFF </button><br>
<?php
function restaurar(){    
    session_destroy();           
    echo "Fazendo LOGOFF ...<br>";
    echo "Retornando em 2 segundos ..."; 
    header("refresh: 2; index.php");
}
if (isset($_POST['restaurar'])) {    
    restaurar(); 
}
?>