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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $idade = date("Y") - $a;
            echo "Você nasceu em $a e tem $idade anos";

            if ($idade < 16){
                $tipovoto = "Não vota";
            }
            elseif(($idade>=16 && $idade<18) || $idade>65){
                $tipovoto = "Voto opcional";
            }
            else{
                $tipovoto = "Voto obrigatório";
            }
            echo "<br/>Para essa idade, $tipovoto";
        ?>
    </div>
</body>
</html>