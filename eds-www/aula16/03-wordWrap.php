<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
        $res = wordwrap($txt, 5, "<br/>\n", true);
        echo $res;
    ?>
</div>
</body>
</html>