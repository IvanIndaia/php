<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $nome = "Guanabara";
        $novo = str_pad($nome, 50, " ", STR_PAD_RIGHT);
        /* ou
        $novo = str_pad($nome, 30, " ", STR_PAD_CENTER); # NÃO DEU CERTO!
        $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
        */
        echo $novo
    ?>
</div>
</body>
</html>