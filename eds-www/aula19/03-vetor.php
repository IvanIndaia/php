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
    print_r($v);
    ?>
    </pre>
</div>
</body>
</html>