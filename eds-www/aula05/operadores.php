<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operador Aritméticos</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
    ?>
</body>
</html>