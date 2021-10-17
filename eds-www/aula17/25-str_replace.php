<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $frase = "Gosto de estudar Matemática";
        $nova = str_replace("Matemática","PHP", $frase);
        echo "$nova<br/><br/>";

        #Ignorando minúsculas e maiúsculas
        $frase = "Gosto de estudar Matemática";
        $nova = str_ireplace("matemática","PHP", $frase);
        echo "$nova";
    ?>
</div>
</body>
</html>