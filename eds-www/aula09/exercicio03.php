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
        body {
            background-color: azure;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
            $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
            $media = ($n1 + $n2)/2;
            echo "A média entre $n1 e $n2 é igual a $media <br/>";
            echo "Situação do aluno: ";

            if ($media < 5){
                echo "REPROVADO<br/>";
            }
            elseif($media < 7){
                echo "RECUPERAÇÃO<br/>";
            }
            else{
                echo "APROVADO<br/>";
            }
        ?>
        <br/>
        <form method="get" action="exercicio03.html">
            <input type="submit" value="Voltar"/>
        </form>
    </div>
</body>
</html>