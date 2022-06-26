<?php
session_start();
require_once 'head.php';

require_once 'base.php';

?>
<title>CADASTRO</title>
<nav>
    <h1>CADASTRO DE PESSOAS</h1>
</nav>

<body>
    <?php
    require_once 'formcad.php';
    require_once 'impressao.php';
    require_once 'restaurar.php';
    ?>
</body>
<footer>
    <?php
    require_once 'totalcad.php';
    require_once 'mediaidade.php';
    ?>
</footer>
</html>