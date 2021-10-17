<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $v = isset($_GET["val"]) ? $_GET["val"] :  1;
        echo "<h1> Calculando o fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c--;
        } while ($c >= 1);
        echo "<h2>Fatorial de $v! = $fat</h2>"
    ?>
    <p><a href="fatorial.php" class="botao">Voltar</a></p>
</div>
</body>
</html>