<?php   
    $p = $_POST['preco'];
    $desc = $_POST['desc'];

    $valor = ($p - ($p * $desc / 100));

    echo"<p>O resultado do preço com o desconto é $valor</p>";