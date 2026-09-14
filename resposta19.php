<?php
    $tempo = $_POST['tempo'];
    $metro = $_POST['metro'];
    $velocidade = $metro / $tempo;
    echo "<p>A velocidade é: $velocidade m/s</p>";
