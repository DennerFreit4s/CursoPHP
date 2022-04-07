<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $frequencia = $_POST["porcentagem"];

        $FrequenciaFormatado = str_replace("%", "", $frequencia);

        if($FrequenciaFormatado >= 0 && $FrequenciaFormatado <= 100) {
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

            echo "O aluno ".$nome." teve como média final a nota ".$media.".";

            if ($media >= 5 && $FrequenciaFormatado > 75) {
                echo "<br>Situação: <b>Aprovado.</b>";
            } elseif ($media >= 5 || $FrequenciaFormatado > 75) {
                echo "<br>Situação: <b>Em Recuperação.</b>";
            } else {
                echo "<br>Situação: <b>Reprovado.</b>";
            }
            
        } else {
            echo "<h2> Insira uma porcentagem válida </h2>";
        }
        
    ?>
</body>
</html>