<?php
$array1 = array(array(),'pera','abacate');

$array = array(
    "1" => array("nome" => "Adriano","idade" => "81","CEP" => "89110-000")
);
// for ($x=1;$x<2;$x++){
//     echo " $x " ;
//     var_dump($array[$x]['nome']);
//     var_dump($array[$x]['idade']);
//     var_dump($array[$x]['CEP']);
// }

foreach ($array as $key => $value){
    echo "Chave: $key o valor é $value\n";
    foreach ($value as $item){
        var_dump($item);
    }
}


?>





// var_dump($array);
// var_dump($array['1']);
// var_dump($array['1']['nome']);
// var_dump($array['1']['idade']);
// var_dump($array['1']['CEP']);