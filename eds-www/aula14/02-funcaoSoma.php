<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        function soma($a, $b){
            $s = $a + $b;
           return $s;
        }
        $x = 7;
        $y = 18;
        $res = soma($x,$y);

        echo "<p>A soma entre $x e $y = $res</p>"
    ?>
</div>
</body>
</html>