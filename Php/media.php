<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Notas Alunos</title>
</head>

<body>

    <?php

        $nota1 = 8;
        $nota2 = 9;
        $nota3 = 5;

        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {

            echo "Aprovado";

        } elseif ($media >= 5 && $media < 7) {

            echo "Recuperação";

        } else {

            echo "Reprovado";
        }

    ?>

</body>

</html>