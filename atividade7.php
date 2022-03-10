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

        if (($numero % 4) == 0) {
            echo "O número ".$numero." é divisível por 4.";
        } else {
            echo "O número ".$numero." não é divisível por 4.";
        }
        
    ?>
</body>
</html>