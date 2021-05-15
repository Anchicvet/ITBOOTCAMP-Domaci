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
        $imeiprezime= $_GET['imeiprezime'];
        $ii= substr($imeiprezime,0,1);
        $ip = strpos ($imeiprezime, ' ');
        $inp = substr ($imeiprezime,$ip+1);
        $inpr = substr ($inp,0,1);
        $ini = strtoupper ($ii);
        $inpre = strtoupper ($inpr);
        echo "$ini.$inpre";


    ?>
</body>
</html>