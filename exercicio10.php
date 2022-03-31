<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
</head>
<body>
    <?php
    
    $idade = $_POST["idade"];

    if (($idade >= 16 && $idade < 18) || $idade > 70) {
        echo "<h2> Voto opcional! </h2>";
    } elseif ($idade >=18 && $idade < 70) {
        echo "<h2> Voto obrigatório! </h2>";
    } else {
        echo "<h2> Não está apto para votar! </h2>";
    }
    ?>
</body>
</html>