<!-- aula_001.9.4.php -->

<!-- SWTICH 

A=30

CASE A: 
    10:
        ..
    20:
        ..
    30:
        ..
    *: -->


<?php
$i = 10;
switch ($variavel) {
    case 10:
        print "entrou 10";
        break;
    case 20:
        print "entrou 20";
        break;
    case 30:
        print "entrou 30 ";
        break;
    default:
        print "entrou no default";
        
}

$i = 10;
if ($i == 10) {
    print "entrou 10";
} elseif ($i == 20) {
    print "entrou 20";
} elseif ($i == 30) {
    print "entrou 30";
} else {
    print "entrou no default";
}
