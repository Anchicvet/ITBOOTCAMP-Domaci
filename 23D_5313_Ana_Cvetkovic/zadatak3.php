<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz<br>
    b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.<br>
    c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.<br>
    d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. <br>
    </p>
    <?php

           
            function ucitava(){
                $niz=$_GET['niz'];
                $x = explode(" ", $niz);
                
                return $x;
            }
           
           
                $nizz = ucitava();
                join(" ,",$nizz);
                print_r($nizz);
                

                
                function ispitujeparne($n){
                    $postoji=false;
                    $brojac=0;
                    for($i=0; $i<count($n); $i++){                
                        if($n[$i] % 2 == 0){
                            $brojac++;
                            if($brojac > 3){
                                $postoji= true;
                            }
                        }
                    }
                   return $postoji;
                }
                
                echo "<br>";
                $p=ispitujeparne($nizz);
                var_dump($p);
                echo "<br>";

                function ispitujesve($n){
                    $ima=true;
                    for($i=0; $i<count($n); $i++){
                        if($n[$i] > 1000){
                            $ima= false;
                        }
                    }
                    return $ima;
                }

                $a=ispitujesve($nizz);
                var_dump($a);
                echo "<br>";

                function proveri($n){
                    $a=ispitujesve($n);
                    $p=ispitujeparne($n);

                    echo "<br>";
                    var_dump($a);
                    echo "<br>";
                    var_dump($p);


                }

                echo proveri($nizz);
           
    ?>
</body>
</html>