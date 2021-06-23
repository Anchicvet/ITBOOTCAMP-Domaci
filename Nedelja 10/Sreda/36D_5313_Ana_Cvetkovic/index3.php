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
        include "index2.php";

        $proizvodi= $b-> prikazi_proizvode();
        
        echo "<div>";
        foreach($proizvodi as $proizvod){
            echo "<div>";
                foreach ($proizvod as $val)
                    echo "<span>".$val."</span>";
                    echo "<form action='promena_korpe.php'>";
                            echo "<input type='hidden' name='akcija' value='dodaj'></input>";
                            echo "<input type='hidden' name='barkod_proizvoda' value='".$proizvod['barkod']."'></input>";
  
                            echo "<input type='submit' value='UBACI U KORPU'></input>";
                    echo "</form>";
            echo "</div>";
        }
        echo "</div>";
    ?>
</body>
</html>