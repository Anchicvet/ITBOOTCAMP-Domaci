<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.

 Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.

Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji.



<body>
    <?php
       $ime = "ime";
       $prezime = "prezime";
       $imeduz= strlen ($ime);
       $prezimeduz= strlen ($prezime);

        duze();
        echo "<p style=color:red>".vraca()."</p>";
        echo "<p style=color:green>".vraca_krace()."</p>";

       function duze(){
           global $ime,$prezime,$imeduz,$prezimeduz;
           if($imeduz > $prezimeduz){
               echo "$ime";
           }else{
               echo "$prezime";
           }
       }

       function vraca(){
           global $ime,$prezime,$imeduz,$prezimeduz;
           if($imeduz > $prezimeduz){
               return $ime;
           }else{
               return $prezime;
           }
       }

       function vraca_krace (){
        global $ime,$prezime,$imeduz,$prezimeduz;
        if($imeduz < $prezimeduz){
            return $ime;
        }else{
            return $prezime;
        }
       }

    ?>
</body>
</html>