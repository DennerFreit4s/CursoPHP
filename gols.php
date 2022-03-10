<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato</title>
</head>
<body>
    <?php
        $golsLocal = $_POST["timeLocal"];
        $golsVisitante = $_POST["timeVisitante"];

        if($golsLocal > $golsVisitante) {
            echo "Vencedor Time Local";
        } else if ($golsLocal < $golsVisitante) {
            echo "Vencedor Time Visitante";
        } else {
            echo "Empate";
        }
    ?>
</body>
</html>