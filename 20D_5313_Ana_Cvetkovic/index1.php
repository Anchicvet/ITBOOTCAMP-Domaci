<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <p>Написати функцију која враћа већи од 3 броја
     (3 броја су прослеђени функцији кроз параметре)</p>
<body>
    <?php
        $a = mt_rand (10,100);
        $b = mt_rand (10,100);
        $c = mt_rand (10,100);
        echo "$a";
        echo "<br>";
        echo "$b";
        echo "<br>";
        echo "$c";
        echo "<br>";


        function vraca_veci($a,$b,$c){
            if ($a > $b and $a > $b){
                return $a;    
                }if ($b > $a and $b > $c) {
                   return $b;
                } else {
                    return $c;
                }
                
            }

            echo vraca_veci($a,$b, $c);
           
        
    ?>
</body>
</html>