<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        /*
        $frase = "Eu estou aprendendo PHP";
        $string = "php";
        $pos = strpos(strtoUpper($frase), strtoupper($string));
        echo "A string $string na frase: $frase. <br/>\n foi encontrada na posição: $pos";
        */
        $frase = "Eu estou aprendendo PHP";
        $string = "php";
        $pos = stripos($frase, $string);
        echo "A string $string na frase: $frase. <br/>\n foi encontrada na posição: $pos";
    ?>
</div>
</body>
</html>