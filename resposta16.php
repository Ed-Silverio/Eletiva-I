<?php
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'];
    $periodo = $_POST['periodo'];

    $juros = ($capital * $taxa * $periodo) / 100;
    $total = $capital + $juros;

 echo "<p>O valor total é: $total</p>";