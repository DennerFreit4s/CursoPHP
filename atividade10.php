<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <?php

    $area = $_POST["area"];

    switch ($area) {
        case 1:
            echo "<li> Administração; </li> \n <li> Direito; </li> \n <li> Letras. </li>";
            break;
        case 2:
            echo "<li> Ciência da Computação; </li> \n <li> Engenharias; </li> \n <li> Matemática. </li>";
            break; 
        case 3:
            echo "<li> Educação Física; </li> \n <li> Medicina; </li> \n <li> Odontologia. </li>";
            break;
        default:
        echo "Ocorreu algum erro!";
        break;
    }
    ?>
</body>
</html>