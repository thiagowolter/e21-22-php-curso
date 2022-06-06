<!-- ephp_026.php  -->

<!-- 26. Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. -->

<form action="" method="POST">
    Digite uma frase: <input type="text" name="frase">
    <input type="submit" name="enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $frase = $_POST['frase'];
    echo 'Voce digitou: ' . $frase;
}

$frase_i = strrev($frase);
echo '<br>A frase invertida fica ' . $frase_i;
if ($frase == $frase_i){
    echo '<br> Logo é um palindromo';
}else{
    echo '<br> Logo não é um palindromo';
}

?>