<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];

        if ($numero > 10) {
            echo "O número é maior do que 10.";
        } else {
            echo "O número não é maior do que 10.";
        }
        
    ?>
</body>
</html>