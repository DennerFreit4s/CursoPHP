<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato</title>
</head>
<body>
    <form action="gols.php" method="post">
        <label for="txtTimeLocal">
            Gols do time local:
        <input type="text" name="timeLocal" id="txtTimeLocal">
</label>
<label for="">
    <input type="text" name="timeVisitante" id="txtTimeVisitante">
    Gols do time visitante
</label>
<button type="submit">Determinar vencedor</button>
</body>
</html>