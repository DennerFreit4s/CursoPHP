<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <?php
        echo "<ul>";
        for ($contador = 100; $contador >=0; $contador--) {
            echo"<li>".$contador."</li>";
        }
        echo "</ul>";


    ?>
    
</body>
</html>