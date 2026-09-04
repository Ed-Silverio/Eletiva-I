<?php
    $b = $_POST['base'];
    $exp = $_POST['exp'];
    $resultado = ($b ** $exp);

    echo "<p>O resultado do número $b elevado à $exp potência é $resultado";