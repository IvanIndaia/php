<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase, 0);
        // Resultado: 5
        echo $cont;
        echo "<br/>";

        $cont = str_word_count($frase, 1);
        // Resultado: array de frase
        print_r($cont);
        echo "<br/>";

        $cont = str_word_count($frase, 2);
        // Resultado: array de frase
        print_r($cont);
    ?>
</div>
</body>
</html>