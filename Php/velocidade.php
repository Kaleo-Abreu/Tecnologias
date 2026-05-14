<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Velocidade</title>
</head>
<body>

<?php
#01
$velocidade_ms = 10;
$velocidade_kmh = $velocidade_ms * 3.6;

echo "A velocidade em Km/h é: $velocidade_kmh<br/>";

#02
$velocidade_kmh = 20;
$velocidade_ms = $velocidade_kmh / 3.6;

echo "A velocidade em M/s é: $velocidade_ms<br/>";

#03
$base = 15;
$altura = 5;
$area = ($base * $altura) / 2;

echo "A área do triângulo é: $area<br/>";

#04
$lado = 18;
$area = $lado * $lado;

echo "A área do quadrado é: $area<br/>";

#05
$base = 28;
$altura = 13;
$area = $base * $altura;

echo "A área do quadrado é: $area<br/>";


?>

</body>
</html>