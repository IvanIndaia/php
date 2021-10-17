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
        $v = array( 40 => "A",
                    41 => 9,
                    78 => "C",
                    79 => 7);
        $v[] = "E";
        unset($v[41]);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>