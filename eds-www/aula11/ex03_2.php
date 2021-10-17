<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $ini = $_GET["ini"];
        $fim = $_GET["fim"];
        $inc = $_GET["incr"];
        echo "Início: $ini <br/>Fim: $fim <br/>Incremento: $inc <br/>";

        echo "<br/>Contagem: ";
        if ($ini < $fim){
            while ($ini <= $fim){
                echo "$ini ";
                $ini += $inc;
            }
        }
        else if ($ini > $fim){
            while ($ini >= $fim){
                echo "$ini ";
                $ini -= $inc;
            }
        }
        else {
            echo "Início e Fim são iguais, impossível fazer contagem!";
        }
    ?>
    <br/><br/>
    <form method="get" action="ex03.php">
        <input type="submit" value="Voltar"/>
    </form>
</div>
</body>
</html>