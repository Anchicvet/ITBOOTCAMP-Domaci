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
        $destinacije=$d->prikazi_destinacije();

        echo "<table border='1'>";
        foreach($destinacije as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
        echo "</table>";


        echo "<br>";
        $putnici=$d->prikazi_putnike();
       
        echo "<table border='1'>";
            foreach($putnici as $red) {
            echo "<tr>";
                foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
            }
        echo "</table>";



        echo "<br>";
    $otkazi=$d->otkazi_rezervaciju(90);

    echo "<table border='1'>";
        foreach($otkazi as $red) {
            echo "<tr>";
                foreach($red as $val)
                    echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
    echo "</table>";
    ?>
</body>
</html>