<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>Napravi tabelu 3x4 u kojoj pise: </p>

        <?php
             echo"<table border='1'>";
             for($i=1; $i<=3; $i++){
                
                 echo "<tr>";
                 for($j=1; $j<=4; $j++){
                     echo "<td>".($i*2)."-".($j*3)."</td>";
                 }
                 echo "</tr>";
             }
             echo "</table>";

        ?>
</body>
</html>