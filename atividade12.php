<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <?php
    
    $placa = $_POST["placa"];
    $final = substr($placa, -1, 1);

    if ($final == 1 || $final == 2) {
        echo "<h2> Não pode circular às segundas-feiras. </h2>";
    } elseif ($final == 3 || $final == 4) {
        echo "<h2> Não pode circular às terças-feiras. </h2>";
    }  elseif ($final == 5 || $final== 6) {
        echo "<h2> Não pode circular às quartas-feiras. </h2>";
    }  elseif ($final == 7 || $final == 8) {
        echo "<h2> Não pode circular às quinta-feiras. </h2>";
    }  elseif ($final == 9 || $final == 0) {
        echo "<h2> Não pode circular às sexta-feiras. </h2>";
    } else {
        echo "<h2> Insira um valor válido. </h2>";
    }
    ?>
</body>
</html>