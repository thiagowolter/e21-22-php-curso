<!-- aula_001.9.7 - break -->

IF WHILE FOR E FOREACH = > BREAK 

<?php
$cesto_frutas = array("maça", "laranja", "pera", "banana");
foreach ($cesto_frutas as $fruta) {
    if ($fruta == "laranja") {
        print $fruta;
        echo "O primeiro número consta na lista <br>";
        break;
    }
}
?>