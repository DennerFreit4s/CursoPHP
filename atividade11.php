<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
    <?php
    
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];

    switch ($sexo) {
        case 1:
            echo "<h2> Bem vindo $nome.</h2>";
            break;
        case 2:
            echo "<h2> Bem vinda $nome.</h2>";
            break;
        default:
        echo "Ocorreu algum erro!";
        break;
    }
    ?>
</body>
</html>