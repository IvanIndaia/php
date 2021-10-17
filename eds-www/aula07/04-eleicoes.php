<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $anon = $_GET["nasc"];
        $idade = 2021 - $anon;
        echo "Quem nasceu em $anon tem idade de $idade anos <BR/>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa frma seu voto é: $tipo";
    ?>
</body>
</html>