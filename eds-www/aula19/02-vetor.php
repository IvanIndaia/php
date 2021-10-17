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
    $v = array("A", "J", "M", "X", "K");
    $v[] = "T"; # ou array_push($v, "T");
    array_push($v, "U");
    array_push($v, "R");
    array_pop($v);
    print_r($v);


    ?>
    </pre>
</div>
</body>
</html>