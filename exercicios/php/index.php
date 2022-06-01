<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style type="text/css">
        .box {
            display: flex;
            align-items: center;
            flex-flow: row wrap;
            justify-content: center;
            color: red;
            font-family: monospace;
            font-size: 22px;
            text-transform: uppercase;
        }
        .one {
            flex: 1 1 auto;
            font-family: monospace;
            font-size: 18px;
            text-transform: lowercase;
        }
       
        
    </style>
</head>



<?php
$path = "./";
$diretorio = scandir($path);
echo '<div class="box">';
echo "<div><h1> Indice de arquivos de aula</h1></div>";
echo '</div>';
$x = 0;

echo '<div class="box" >';
foreach ($diretorio as $arquivo) {
    if ($x == 0) {
        echo '<div class="one">';
    }
    echo '<br><a href="' . $path . $arquivo . '">' . "    " . $arquivo . "    " . '</a>';
    $x++;
    if ($x > 8) {
        echo '</div>';
        $x = 0;
    }
}
echo "</div>";


?>

</html>