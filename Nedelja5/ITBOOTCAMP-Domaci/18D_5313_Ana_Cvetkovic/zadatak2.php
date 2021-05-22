<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. 
        Prikazati konacan rezultat crvenom bojom
        a poslednje pomnozeni broj - zelenom.
    </p>
    <?php
        $i = 30;
        $p = 1;

        while($i >=1){
                $p= $p * $i;
                if($p >= 100000) break;
                 $i-- ;
        }
           
            echo "<p style=color:green>$i</p>";
            echo "<p style=color:red>$p</p>";
    ?>
</body>
</html>