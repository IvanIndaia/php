<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $num = isset($_GET["val"]) ? $_GET["val"] :  1;
        echo "<h1> Calculando a Tábuada de $num </h1><br/>";
        $cont = 1;
        do {
            $r = $cont * $num;
            echo "$cont  X $num =  $r <br/>";
            $cont++;
        } while ($cont <= 10);
    ?>
    <p><a href="03-index.html" class="botao">Voltar</a></p>
</div>
</body>
</html>