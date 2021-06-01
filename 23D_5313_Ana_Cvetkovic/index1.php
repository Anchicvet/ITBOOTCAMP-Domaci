<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .crveni{
            color:red;
        }
        .zeleni{
            color:green;
        }
    </style>
<body>
    <p>1.Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. 
    Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.
    </p>
    <?php
             $niz=["knjiga", "sveska", "olovka", "komp", "mis"];
           
            foreach($niz as $ind=>$el){
                if(strlen($el) > 5 ){
                    echo "<span class='crveni'>$el </span>";
                }else{
                    echo "<span class='zeleni'>$el </span>";

                }
            }

    ?>
    <p>2.Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). 
    </p>
    <?php
            $nizz=[1,12,14,21,7,8,26,2,33];
            $k=count($nizz);
            $zbir=0;

            for($i=0; $i < $k; $i++){
                $zbir+=$i;
            }

            $ars=$zbir/$k;
            echo "$k je broj brojeva u nizu";
            echo "<br>";
            echo "$zbir je zbir svih brojeva u nizu";
            echo "<br>";

            echo "$ars je Aritmeticka sredina niza";
            echo "<br>";
            $noviniz=[];

            for($i=0; $i < $k; $i++){
                if($nizz[$i] > $ars){
                    array_push($noviniz, $nizz[$i]);
                    
                }
                
        }
        echo "Novi niz:" .join("," , $noviniz)."<br>";
    ?>
   
</body>
</html>