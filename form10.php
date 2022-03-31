<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <h2> Qual sua área de interesse? </h2><br>
    <form action="atividade10.php" method="post">
    <label for="rdbHumanas"><input type="radio" name="area" value="1">Humanas </label><br>
    <label for="rdbExatas"><input type="radio" name="area" value="2">Exatas </label><br>
    <label for="rdbBiologiocas"><input type="radio" name="area" value="3">Biológicas </label><br><br>
    <button type="submit"> Enviar </button>
    <button type="reset"> Limpar </button>
</body>
</html>