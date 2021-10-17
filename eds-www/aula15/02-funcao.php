<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        include "funcoes.php";
        /* require é a mesma coisa do include porem se houver erro no require ele para a execução.*/
        /* include_once e require_once: só importa uma vez sem ter que ficar importando arquivo duplicado.*/
        echo "<h1>Testando novas funções!</h1>";
        ola();
        mostrarValor(4);
    ?>
</div>
</body>
</html>