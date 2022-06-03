<!-- aula_001.11.5.php -->

<!-- Funções Anonimas 
lambda funcions no PHP são a Instancia de uma classe Closure -->

<?php
$remove_acento = function($str){
    $a = array('ç','Ç');
    $b = array('c','C');
    return str_replace($a,$b,$str);
};
echo $remove_acento('açafrao');
echo  '<br>';

?>

<!-- Inserir na array, todos os acentos e seus substitutivos sem acento  -->
<?php
$palavras = array();
$palavras[] = 'conceiÇão';
$palavras[] = 'cação';
$palavras[] = 'caução';
$r = array_map( $remove_acento,$palavras);
print_r($r);

?>


