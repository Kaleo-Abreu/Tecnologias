<!DOCTYPE html>
   <html lang = "pt-br">
   <head>
     <meta charset = "utf-8"/>
     <title>Índice de Massa Corporal</title>
</head>
<body>
    <?php
   $altura = 1.70;
   $peso = 70;
   $imc = $peso / ($altura * $altura);

   if ($imc <= 25) {
            echo "Normal";
        } elseif ($media >= 25 && $media < 30) {
            echo "Obesidade";
        } else {
            echo "Obesidade mórbida";
        }
   ?>
</body>
