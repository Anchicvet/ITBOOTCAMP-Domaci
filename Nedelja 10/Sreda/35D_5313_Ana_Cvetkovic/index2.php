<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         include "index1.php";

        
         $destinacija = $d->daj_id('Grcka','Atina');

         echo "<table border='1'>";
         foreach($destinacija as $red) {
             echo "<tr>";
             foreach($red as $val)
                 echo '<td>'. $val . '</td>';
             echo "</tr>";
         }
         echo "</table>";
 
         echo "<br>";
 


        $destinacije = $d->daj_destinacije(4);

        echo "<table border='1'>";
        foreach($destinacije as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
        echo "</table>";

        echo "<br>";

        $obrisi=$d->obrisi_putovanje(2);

        echo "<table border='1'>";
        foreach($obrisi as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>