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
            $std = isset($_GET["estado"])?$_GET["estado"]:"Estado inválido!";

        switch ($std) {
            case "São Paulo":
                echo "Sudeste";
                break;
            case "Paraná":
                echo "Sul";
                break;
            case "Acre":
                echo "Norte";
                break;
            default:
                echo "Estado não encontrado!";
        }
        ?>
        <br/>
        <form method="get" action="exercicio03.html">
            <input type="submit" value="Voltar"/>
        </form>
    </div>
</body>
</html>