<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
    .veci{
        color:green;
    }
    .manji{
        color:red;
    }
    </style>
<body>
    <?php
    $a = mt_rand (1,100);
    $b = mt_rand (1,100);


    if($a > $b){
        echo "<span style='color:green'> $a je veći broj</span><span style='color:red'>,$b je manji broj </span>";
    }else{
        echo "<span style='color:green'> $b je veći broj</span><span style='color:red'>,$a je manji broj </span>";
    }
    echo "</br>";

    if($a > $b){
        echo "<span class='veci'> $a je veći broj</span><span class='manji'>,$b je manji broj </span>";
    }else{
        echo "<span class='veci'> $b je veći broj</span><span class='manji'>,$a je manji broj </span>";
    }
 
   
    ?>
    
</body>
</html>