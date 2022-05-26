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
    $i = $_POST['inicio'];
    $f = $_POST['fim'];
    echo '<br>';
    echo 'numero inicial = ' . $i;
    echo '<br>numero final = ' . $f;
}
    echo '<br> Contagem entre os numeros é: ';
    while(++$i < $f){
        
        echo '<br> ', $i;
    }
?> 