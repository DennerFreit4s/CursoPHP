<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <?php

    $nome = $_POST ['nome'];
    $soma = 0;

    for ($cont = 1; $cont <= 4; $cont++) {
        $nota[$cont] =  $_POST['nota'.$cont];
        $soma = $soma + $nota[$cont];
    }
    $media = $soma / 4;

    echo "<h2>Notas do aluno: ".$nome.":</h2>";
    for($cont = 1; $cont <= 4; $cont++) {
        echo "<p>Nota do ".$cont." bimestre: ".$nota[$cont]."</p>";
    }

    echo "<p><strong>Média final do aluno: ".$media."</strong></p>;";
    ?>
    
</body>
</html>