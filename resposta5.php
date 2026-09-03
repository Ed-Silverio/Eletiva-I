<?php
    $tempC = $_POST["temp"];
    $tempF = (($tempC * 1.8) + 32);

    echo "A temperatura $tempC ºC, são $tempF ºF.";