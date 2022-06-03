<!-- aula_001.11.5.php -->

<!-- Funções Anonimas 
lambda funcions no PHP são a Instancia de uma classe Closure -->

<?php
$remove_acento = function($str){
    $a = array('ç','Ç','ã','Ã');
    $b = array('c','C','a','A');
    return str_replace($a,$b,$str);
};
echo $remove_acento('açafrão');
echo  '<br>';

?>

<!-- Inserir na array, todos os acentos e seus substitutivos sem acento  -->
<?php
$palavras = array('conceiÇão','cação','caução');
foreach($palavras as $plv){
    echo '<br>' ,$remove_acento($plv);
}



?>


