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
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos";
            if ($i >=18){
                $v = "Já pode votar";
                $d = "Já pode dirigir";
            }
            else{
                $v = "Não pode votar";
                $d = "Não pode dirigir";
            }
            echo "<br/>Com essa idade você <p> $v </p>e também <p>$d</p>"
        ?>
    </div>
</body>
</html>