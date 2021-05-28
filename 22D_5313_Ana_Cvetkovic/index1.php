<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1.Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)</p>
    <?php
            function izracunava($niz){
                    $brd=0; $brt=0;
                    for($i=0; $i<count($niz); $i++){
                        if($niz[$i] > 9 and $niz[$i]<100){
                                $brd++;
                        }
                        if($niz[$i] > 100 and $niz[$i]<1000){
                                $brt++;
                        }
                    }
                    if($brd > $brt){
                        echo "Ima vise dvocifrenih brojeva";
                    }else{
                        echo "Ima vise trocifrenih brojeva";

                    }
                }


            izracunava([13,55,666,333,77,888,99,43,56,123]);

    ?>
        <p>2.Napisati fju koja za dati niz stringova pomocu fje "palindrom" 
        (radjeno na casu) ispituje i prikazuje samo palindrome tog niza. 
         Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".</p>
    <?php
             function palindrom($str){ 
                 for($i=0; $i<count($str); $i++)
                    if($str[$i] === strrev($str[$i]))
                         echo "$str[$i],  ";
                }
            

            $p=["potop","buducnost", "lul", "nije"];
            palindrom($p);

    ?>
        <p>3.Napisati fju koja od niza reči pravi html listu kao meni... 
            Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  
        </p>

    <?php
            function meni($n){
                echo "<ul>";
                    for($i=1 ; $i<=count($n); $i++){
                        echo "<li>$n[1] $i</li>";
                    }
                echo "</ul>";
            }

            meni(["Stavka ", "Stavka ", "Stavka ", "Stavka "]);

    ?>
       
</body>
</html>