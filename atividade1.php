<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $multiplicacao = $numero1 * $numero2;

        echo "<p> Resultado da multiplicação foi: ".$multiplicacao.".</p>";
    ?>
</body>
</html>