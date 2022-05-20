<!-- http://127.0.0.1:8080/e014.php?nome=adriano&idade=18&cidade=campo%20grande&estado=Mato%20Grosso%20do%20Sul -->


<?php
    echo 'Nome:   ' . htmlspecialchars($_GET["nome"]) . '<br>' ;    
    echo 'Idade:  ' . htmlspecialchars($_GET["idade"]) . '<br>';
    echo 'Cidade: ' . htmlspecialchars($_GET["cidade"]) . '<br>';
    echo 'Estado: ' . htmlspecialchars($_GET["estado"]) . '<br>';

    
    echo 'Dump da variavel $_GET' . '<br>';
    var_dump($_GET);

    echo "<br><p> Listando Valores das variaveis:<br>";
    foreach($_GET as $i  ){        
         print_r($i);
         echo"<br>";    
    }
    echo "</p>"
?>