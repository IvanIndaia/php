<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php
        $p = "Leite";
        $pr = 4.5;
        /*
        Atual:
        echo "O $p custa R$ ".number_format($pr, 2);
        */
        printf ("O %s custa R$ %.2f", $p, $pr);

        /*
         * %d Valor decimal (positivo ou negativo)
         * %u Valor decimal sem sinal (apenas positivos)
         * %f Valor real
         * %s String
         *
         */
    ?>
</div>
</body>
</html>