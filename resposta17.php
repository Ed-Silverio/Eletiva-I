<?php
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'];
    $periodo = $_POST['periodo'];
    $juros = ($capital * (1 + $taxa/100)) ** $periodo;

    echo "<p>O valor total é: $juros</p>";