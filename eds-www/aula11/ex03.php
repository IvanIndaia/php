<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <form method="get" action="ex03_2.php">
        <?php
            echo "Início: <input type='number' name='ini' value='0' min='0' max='100'/><br/>";
            echo "Final: <input type='number' name='fim' value='0' min='0' max='100'/><br/>";
        ?>
        <label for="incr">Incremento: </label>
        <select name="incr" id="inc">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select><br/>
        <br/><input type="submit" value="Enviar"/>
    </form>
</div>
</body>
</html>