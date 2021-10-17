<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <form method="get" action="ex02_2.php">
        <?php
        $cont = 1;
        while ($cont <= 5){
           echo "Valor $cont <input type='number' name='v$cont' max='100' min='0' value='0'/><br/>";
           $cont++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>
</body>
</html>