<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <?php
        $etanol = $_POST["etanol"];
        $gasolina = $_POST["gasolina"];

        $etanolFormatado = str_replace(",", ".", $etanol);
        $gasolinaFormatado = str_replace(",", ".", $gasolina);

        if ($etanolFormatado > ($gasolinaFormatado * 0.7)) {
            echo "Melhor abastecer com gasolina.";
        } else if ($etanolFormatado < ($gasolinaFormatado * 0.7))  {
            echo "Melhor abastecer com etanol.";
        } else {
            echo "Tanto faz o combustível.";
        }
        
    ?>
</body>
</html>