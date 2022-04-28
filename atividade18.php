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

        for ($cont = 1; $cont <= 10; $cont++) {
            $numero[$cont] =  $_POST['numero'.$cont];
        }

        $maior = $numero[1];
        $menor = $numero[1];

        for ($cont = 1; $cont <= 10; $cont++) {
            $soma = $soma + $numero[$cont];
            if ($numero[$cont]>$maior){
                $maior=$numero[$cont];
            }
            if ($numero[$cont]<$menor) {
                $menor=$numero[$cont];
            }
        }
        $media = $soma / 10;

        echo "<h2>Números</h2>";
        for($cont = 1; $cont <= 10; $cont++) {
        echo "<p>Número: ".$numero[$cont]."</p>";
    }

    echo "<p><strong>Média dos números: ".$media."</strong></p><p><strong>Soma dos números: ".$soma."</strong></p></strong></p><p><strong>Maior: ".$maior."</strong></p></strong></p><p><strong>Menor: ".$menor."</strong></p>";
    ?>