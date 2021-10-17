<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $c = 1;
        while ($c <= 5){
            $v = "num".$c;
            $url = "v".$c;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $c++;
        }

        $c = 1;
        while ($c <= 5) {
            $v = "num" . $c;
            $url = "v" . $c;
            echo "Valor $c: " . $$v . "<br/>";
            $c++;
        }
    ?>
</div>
</body>
</html>