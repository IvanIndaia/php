<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array( "Nome" => "Ana Paula",
                "Idade" => 23,
                "Peso" => 65.5);

    $v["Fuma"] = true;
    $v["Sexo"] = "F";
    #print_r($v);

    foreach($v as $Col => $Val){
        echo "O valor de $Col é $Val <br/>";
    }
    ?>
    </pre>
</div>
</body>
</html>