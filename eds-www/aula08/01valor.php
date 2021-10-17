<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - Curso em Vídeo</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é igual a ". number_format($rq, 2);

    ?>
    <a href="01-exercicio.html">Voltar</a>
</body>
</html>