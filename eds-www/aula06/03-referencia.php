<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variável A vale $a";
        echo "</br>A variável B vale $b";
    ?>
</body>
</html>