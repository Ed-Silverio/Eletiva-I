<?php
    $tempF = $_POST["tempF"];
    $tempC = (($tempF - 32) * 5 / 9);

    echo "A temperatura $tempF ºF, são $tempC ºC";

