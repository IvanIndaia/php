<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        p {
            color: blue;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            $r = 0;
            echo "Valor = $n <br/>";
            echo "Operador = $o <br/>";
            switch ($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ** 3;
                    break;
                case 3:
                    $r = sqrt($n); //$n ^(1/2)
            }
            echo "O resultado da operação solicitada foi: <span class='foco'>$r</span>";
        ?>
        <br/><br/>
        <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>
</html>