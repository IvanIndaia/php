<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo " O preco do produto é R$ ". number_format($preco, 2);
        $preco *= 1.1;
        echo "</br>Com 10% de acrescimo fica: R$ ". number_format($preco, 2);
    ?>
</body>
</html>