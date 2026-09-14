<?php 
$dias = $_POST['dias'];
$horas = $dias * 24;
$minutos = $horas * 60;
$segundos = $minutos * 60; 
echo "<p>O tempo em horas é: $horas</p>";
echo "<p>O tempo em minutos é: $minutos</p>";
echo "<p>O tempo em segundos é: $segundos</p>";