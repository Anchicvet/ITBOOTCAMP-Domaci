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
        $ime= $_GET['ime'];
        $prezime= $_GET['prezime'];
        $ii=substr($ime,0,1);
        $ip = substr($prezime,0,1);
        $iime = strtoupper ($ii);
        $iprezime = strtoupper ($ip);
        echo "$iime.$iprezime";

    ?>
</body>
</html>