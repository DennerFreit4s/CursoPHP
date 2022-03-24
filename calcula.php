<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacao = $_POST["operacao"];

        switch ($operacao) {
            case 1:
                $resultado = $numero1 + $numero2;
                $sinal = "+";
                break;
            case 2:
                $resultado = $numero1 - $numero2;
                $sinal = "-";
                break;
            case 3:
                $resultado = $numero1 * $numero2;
                $sinal = "*";
                break;
            case 4:
                $resultado = $numero1 / $numero2;
                $sinal = "/";
                break;
            default:
                echo "Operador inválido!";
                break;
        }

        echo("<p class='resultado'>".$numero1." ".$sinal." ".$numero2." = ".$resultado."</p>");

    ?>
    <a href="calculadora.php" class="botao botao-enviar"> Voltar ao inicio </a>
</body>
</html>