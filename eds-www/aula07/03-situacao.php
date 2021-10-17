<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é $m <br/>";
        # $sit = ($m<6)?"REPROVADO":"APROVADO";
        echo "<br/>A situação do Aluno é: ". (($m<6)?"REPROVADO":"APROVADO");
    ?>
</body>
</html>