<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $vetor[0] = "Curso";
        $vetor[1] = "Em";
        $vetor[2] = "Vídeo";
        $texto = join(" ", $vetor); # Join é a função que faz a mesama coisa, basta substituir implode por join;
        echo $texto;

    ?>
</div>
</body>
</html>