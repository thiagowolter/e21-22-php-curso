<?php
if ( !(isset($_SESSION))) {
    session_start();
};
$DISP = FALSE;
if ($_GET['Display'] == 1) {
    $DISP = True;
}

require_once "cabe.php";


echo "<table>";
if ($_SESSION['cadastro']) {
    foreach ($_SESSION['cadastro'] as $chave => $valor) {
        echo "<tr>";
        echo "<td>" . $valor['titulo'] . "</td>";

        if ( $DISP == FALSE) {
            echo "<td>" . $valor['url'] . "</td>";
            echo "<td>";
            echo "<a href=excl.php?Id=" . $chave . "&titulo=" . urlencode($valor['titulo']) . ">   <button class='tab'>  Exc </button>  </a>";
            echo "</td>";
            echo "<td>";
            echo "<a href=alte.php?Id=" . $chave . "> <button class='tab'>  Alt </button> </a>";
            echo "</td>";
        } else {
            $titulo = "AM: Display";
            echo "<td class='tdframe'>" . $valor['frame'] . "</td>";  
        }


        echo "</tr>";
       
    }

    if ($DISP = FALSE) {
        echo "<tr>";
        echo "<form method='post'><button type='submit' name='restaurar'> Restaurar </button>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Session['cadastro'] não encontrado" . $b;
}


?>