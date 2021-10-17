<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $enc = "PHP";
        $cont = substr_count($frase, $enc);
        print("$enc encontrado $cont vezes na frase");
    ?>
</div>
</body>
</html>