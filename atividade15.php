<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];

        // $contador = $tabuada;

        echo "<h2> Antecessores do número ".$numero.".</h2>";

        for ($contador = $numero - 1; $contador >= $numero - 10; $contador--) {
            echo ($contador."<br>");
        }
    ?>
</body>
</html>