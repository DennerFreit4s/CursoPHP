<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Exercicio 1</title>
</head>
<body>
<form action="calcula.php" method="post">
    <label for="txtNumero1" class="form-label">Número 1: <input type="text" name="numero1" id="txtNumero1" class="form-text"></label><br><br>
    <label for="txtNumero2" class="form-label">Número 2: <input type="text" name="numero2" id="txtNumero2" class="form-text"></label><br>
    <br><label for="rdbSoma"><input type="radio" name="operacao" value="1">Adição </label><br>
    <label for="rdbSubtracao"><input type="radio" name="operacao" value="2">Subtração </label><br>
    <label for="rdbMultiplicacao"><input type="radio" name="operacao" value="3">Multiplicação </label><br>
    <label for="rdbDivisao"><input type="radio" name="operacao" value="4">Divisão </label><br><br>
    <button type="submit" class="botao botao-enviar"> Enviar </button>
    <button type="reset" class="botao botao-limpar"> Limpar </button>
</form>
</body>
</html>