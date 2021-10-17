<!DOCTYPE html>
<html lang="" pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <pre>
        <table border="1"><tr>
    <?php
        $t = range(5,20,2);
        foreach ($t as $tutu){
            echo "<td>$tutu<br/>";
        }
        ?>
        </table>
    </pre>
</div>
</body>
</html>