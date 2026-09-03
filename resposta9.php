<?php
    $h = $_POST["altura"];
    $b = $_POST["base"];
    $perimetro = ($h * 2 + 2 * $b);

    echo "O perímetro de um retângulo $h x $b, é $perimetro";