<!-- ephp+019.php  -->

<!-- 19. Crie um programa que le um valor de inicio e um valor de fim, exibindo em tela a contagem dos numeros dentro desse intervalo.  -->

<html>
    <body>
        <form method="post">
            inicio: <input type="number" name="inicio">
            fim: <input type="number" name="fim">
            <input type="submit">
        </form>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    echo '<br>';
    echo 'numero inicial = ' . $inicio;
    echo '<br>numero final = ' . $fim;
}
if($inicio < $fim){
    echo '<br> Contagem entre os numeros é: ';
    for ($i = $inicio; $i <= $fim; $i++){
        echo '<br> '. $i;
    }
}else{
    echo '<br> Contagem entre os numeros é: ';
    for ($i = $inicio; $i >= $fim; $i--){
        echo '<br> '. $i;
    }
}
?> 