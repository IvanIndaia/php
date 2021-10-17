<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array("J", "A", "M", "X", "K");
    array_unshift($v, 10);
    array_shift($v);
    #sort($v); # ordenar de forma crescente.
    #rsort($v); # Ordenar de forma decrescente.
    asort($v); # ordenar de forma crescente de valor e o índice.
    arsort($v); # Ordenar de forma decrescente de valor e o índice.
    print_r($v);
    ?>
    </pre>
</div>
</body>
</html>