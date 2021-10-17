<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variávei de Variáveis</title>
</head>
<body>
    <?php
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        echo  $site;
        echo "</br>".$$site;
    ?>
</body>
</html>