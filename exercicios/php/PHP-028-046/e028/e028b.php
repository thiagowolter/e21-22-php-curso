<?php

// Imprimir de forma organizada (=== ++++ /// )
// Cabecalho: 
// Itens: 

$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'leite', 'item4' =>'cafe');
$sacola2 = array('item1' => 'matambre', 'item2' =>'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' =>'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' =>'gelo', 'item3' => 'limão', 'item4' => 'cravo');

$caixa1_da_sogra = array( 1 => $sacola1);
$caixa2_do_churr = array( 2 => $sacola2, 3 => $sacola3, 4=> $sacola4);

$carro = array(1=> $caixa1_da_sogra, 2=> $caixa2_do_churr);

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

echo 'O conteúdo da caixa 1 da sogra: <br> ';

foreach($caixa1_da_sogra as $sacola){
        foreach($sacola as $item => $conteudo ){
            echo '<br>' .  $item . ': ' . $conteudo ;
        }
    }


echo '<br><br>O conteúdo da caixa 2 do churras: <br> ';

foreach($caixa2_do_churr as $sacola){
    foreach($sacola as $item => $conteudo ){
        echo '<br>' .  $item . ': ' . $conteudo ;
    }
}
    
echo '<br><br>======================================<br><br>';
echo '<br><br>O conteúdo do CARRO é: <br> ';

foreach($carro as $caixa){
    foreach($caixa as $sacola ){
        foreach($sacola as $item => $conteudo){
            echo '<br>'.  $item . ': ' . $conteudo ;
        }
    }
}

echo '<br><br>======================================<br><br>';
echo '<br><br>CONTEÚDO COMPLETO: <br> ';
echo '<br>->Carro:';
foreach($carro as $boxkey => $boxvalue){
    echo '<br><br>-Caixa: ' . $boxkey;
    foreach($boxvalue as $sackey => $sacvalue){
        echo '<br>...Sacola: ' . $sackey;
        foreach($sacvalue as $itemkey => $itemvalue){
            echo '<br>.....' . $itemkey . ': ' . $itemvalue;
        }
    }
}