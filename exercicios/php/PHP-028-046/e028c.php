<?php
$array = array(
    "1" => array("nome" => "Adriano", "idade" => "81")
);

// chave: valor
// 1    : {
//     chave : valor
//     nome  : adriano
// }


foreach ($array as $key => $value){
    echo "Chave: $key o valor é $value\n";
    foreach ($value as $item){
        var_dump($item);
    }
}

?>





