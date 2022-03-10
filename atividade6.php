<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];

        if (($numero % 2) == 1) {
            echo "O número ".$numero." é ímpar";
        } else {
            echo "O número ".$numero." é par";
        }
        
    ?>
</body>
</html>