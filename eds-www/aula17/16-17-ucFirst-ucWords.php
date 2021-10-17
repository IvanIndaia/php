<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
    # Primeira letra em maiúscula
        $nome = "ivan alex de oliveira";
        $peq = ucfirst($nome);
        echo "$peq <br/>";

    # Primeira letra de cada palavra em maiúscula
        $nome = "ivan alex de oliveira";
        $peq = ucwords($nome);
        echo $peq;
    ?>
</div>
</body>
</html>