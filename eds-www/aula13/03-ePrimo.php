<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h2>Analisando o número $n ...</h2>";
        echo "<h3>Valores múltiplos: ";
        $cont =0;
        for ($c=1; $c<=$n;$c++){
            if ($n % $c == 0){
                $cont++;
                echo "$c - ";
            }
        }
        echo " Fim!<br/><br/>";
        echo "Total de múltiplos: $cont<br/><br/>";
        if ($cont <= 2){
            echo "Resultado: É PRIMO!";
        }else{
            echo "Resultado: NÃO É PRIMO!";
        }
        "</h3>";
    ?>
    <br/><br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>