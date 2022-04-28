<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <?php
        $soma = 0;

        for ($cont = 1; $cont <= 6; $cont++) {
            $venda[$cont] =  $_POST['venda'.$cont];
            $soma = $soma + $venda[$cont];
        }
        $media = $soma / 6;

        echo "<h2>Vendas do pruduto </h2>";
        for($cont = 1; $cont <= 6; $cont++) {
        echo "<p>Vendas do mês ".$cont.": ".$venda[$cont]."</p>";
    }

    echo "<p><strong>Média final de vendas: ".$media."</strong></p><p><strong>Soma das vendas: ".$soma."</strong></p>";
    ?>
</body>
</html>