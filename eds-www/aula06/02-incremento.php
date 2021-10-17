<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title>Incremento</title>
</head>
<body>
    <?php
        // Comentário
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é ". --$atual; #Incremento é feito antes de mostrar o valor.
    ?>
</body>
</html>