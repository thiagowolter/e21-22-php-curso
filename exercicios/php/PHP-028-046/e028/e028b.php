<?php

// 0       1       2       3       4 
// key (chave) => value (valor)

$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'leite', 'item4' =>'cafe');
$sacola2 = array('item1' => 'matambre', 'item2' =>'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' =>'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' =>'gelo', 'item3' => 'limão', 'item4' => 'cravo');

$caixa1_da_sogra = array( 1 => $sacola1);
$caixa2_do_churr = array( 1 => $sacola2, 2 => $sacola3, 3=> $sacola4);

echo 'Sacola 1:<br>';
foreach($sacola1 as $item => $produto){
        echo '<br>' . $item . ': ' . $produto ;    
    }

echo '<br><br>Sacola 2:<br>';
foreach($sacola2 as $item => $produto){
         echo '<br>' . $item . ': ' . $produto ;    
    }

echo '<br><br>Sacola 3:<br>';
foreach($sacola3 as $item => $produto){
        echo '<br>' . $item . ': ' . $produto ;    
    }

echo '<br><br>Sacola 4:<br>';
foreach($sacola4 as $item => $produto){
    echo '<br>' . $item . ': ' . $produto ;    
}

echo '<br><br>======================================<br><br>';

echo 'O contúdo da caixa 1 da sogra: <br> ';

foreach($caixa1_da_sogra as $sacola){
        foreach($sacola as $item => $conteudo ){
            echo '<br>' .  $item . ': ' . $conteudo ;
        }
    }


echo '<br><br>O contúdo da caixa 2 do churras: <br> ';

foreach($caixa2_do_churr as $sacola){
    foreach($sacola as $item => $conteudo ){
        echo '<br>' .  $item . ': ' . $conteudo ;
    }
}
    
