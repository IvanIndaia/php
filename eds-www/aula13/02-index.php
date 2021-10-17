<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="get" action="02-tabuada.php">
        <select name="num">
            <?php
              for ($i=1; $i<=10; $i++){
                  echo "<option>$i</option>";
              }
            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
</div>
</body>
</html>