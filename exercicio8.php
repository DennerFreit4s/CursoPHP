<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <?php
        $mes = $_POST["txtMes"];

        switch ($mes) {
            case 1:
                $nomemes = "Janeiro";
                break;
            case 2:
                $nomemes = "Fevereiro";
                break;
            case 3:
                $nomemes = "Março";
                break;
            case 4:
                $nomemes = "Abril";
                break;
            case 5:
                $nomemes = "Maio";
                break;
            case 6:
                $nomemes = "Junho";
                break;
            case 7:
                $nomemes = "Julho";
                break;
            case 8:
                $nomemes = "Agosto";
                break;
            case 9:
                $nomemes = "Setembro";
                break;
            case 10:
                $nomemes = "Outubro";
                break;
            case 11:
                $nomemes = "Novembro";
                break;
            case 12:
                $nomemes = "Dezembro";
                break;
            default:
                $nomemes = "Mês inválido!";
                break;      
        }

        echo ("Seu mês de nascimento é ".$nomemes);
    ?>
</body>
</html>