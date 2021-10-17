<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Valor não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[Valor não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem Sexo]";
        $idade = date("Y") - $ano;
        echo "$sexo - $nome que nasceu em $ano tem $idade anos!";
    ?>
    <br/><a href="02-exercicios.html">Voltar</a>
</body>
</html>