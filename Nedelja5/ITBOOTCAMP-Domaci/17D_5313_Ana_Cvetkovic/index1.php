<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <p>
            Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. 
            Prvi span ima vase ime, drugi span vase prezime.
            Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. 
        </p>

<body>
    <?php


            function paragraf(){
                echo "<p><snap>Ana</span><snap>Cvetkovic</span></p>";
            }

            for($i=1; $i<=12; $i++){
                paragraf();
            }
    ?>
        <p>
            Napraviti dva slucajna broja $n i $x u opsegu od 1-10. 
            Prikazati ih.
            Napisati funkciju koja pravi i prikazuje "n" span elemenata. 
            Svaki span ima text Ovo je span 1, Ovo je span 2… 
            Napraviti "x" divova, pri cemu svaki div dobija "n" spanova pozivajuci prethodnu funkciju.
        </p>
        <?php

            $n=mt_rand (1,10);
            $x=mt_rand (1,10);
            echo "$n";
            echo "</br>";
            echo "$x";
            echo "</br>";
            

            function nspan(){
                global $n;
                    for ($i=1; $i<=$n; $i++)
                     echo "<span>Ovo je span $i</span>";
            }

            nspan();
            echo "</br>";
            
            function xdiv(){
                global $x;
                 for ($i=1; $i<=$x; $i++)
                    echo "<div> ".nspan()." </div>";
            }

            xdiv();
        ?>
</body>
</html>