<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, tr, td{
        border:2px solid black;
        width:200px;
        text-align:center;
         }
</style>
<body>
    <?php
    $a = mt_rand (1,10);
    $b = mt_rand (1,10);
    $c = mt_rand (1,10);
    $a2 = $a * $a;
    $b2 = $b * $b;
    $c2 = $c * $c;
    echo "<table>
    <tr>
    <td>$a</td>
    <td>$a2</td>
    </tr>
    <tr>
    <td>$b</td>
    <td>$b2</td>
    </tr>
    <tr>
    <td>$c</td>
    <td>$c2</td>
    </tr>
    </table>";

    ?>
   
</body>
</html>