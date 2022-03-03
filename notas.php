<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com formulários</title>
</head>
<body>
    <form action="processanotas.php" method="post">
    <label for="txtNome"> Nome do Aluno: <input type="text" name="nome" id="txtNome"></label>
    <label for="txtNota1"> Nota 1: <input type="text" name="nota1" id="txtNota1"></label>
    <label for="txtNota2"> Nota 2: <input type="text" name="nota2" id="txtNota2"></label>
    <label for="txtNota3"> Nota 3: <input type="text" name="nota3" id="txtNota3"></label>
    <label for="txtNota4"> Nota 4: <input type="text" name="nota4" id="txtNota4"></label>
    <button type="submit"> Calcular média </button>
    </form>
</body>
</html>