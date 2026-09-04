<?php
    $kg = $_POST['kilograma'];
    $alt = $_POST['altura'];

    $imc = ($kg / ($alt ** 2));

    echo "<p>O seu imc é $imc</p>";