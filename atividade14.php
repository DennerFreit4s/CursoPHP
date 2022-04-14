<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <?php
        $tabuada = $_POST["tabuada"];

        // $contador = $tabuada;

        echo "<h2> Tabuada do número ".$tabuada.".</h2>";

        for ($contador=0; $contador <= 10; $contador++) {
            echo ($tabuada." x ".$contador." = ".$tabuada * $contador."<br>");
        }
    ?>
</body>
</html>