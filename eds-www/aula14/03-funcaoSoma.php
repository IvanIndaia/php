<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        function soma(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;
            for ($i=0; $i<$tot; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        $res = soma(7, 5, 7, 8, 4, 9, 1, 6);
        echo "<p>A soma entre os valores é igual a $res</p>"
    ?>
</div>
</body>
</html>