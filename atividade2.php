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
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "<p> O nome do usuário é ".$nome." e sua idade é de ".$idade." anos.</p>";
    ?>
</body>
</html>