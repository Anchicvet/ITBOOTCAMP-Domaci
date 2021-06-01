<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1.Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.</p>
    
    <?php
             function pravi(){
                $k=mt_rand(5,8);
                $x=[];
                for($i=0; $i<$k; $i++){
                    $x[$i]=mt_rand(0,10);
                }
                echo "Niz: ".implode(", ", $x)."<br>";
                return $x;
            }
    
            $niz=pravi();
            print_r($niz);

            function nule($n){
                $ima=true;
                for($i=0; $i<count($n); $i++){
                    if($n[$i]=== 0){
                        $ima= false;
                        return $ima;
                        break;
                    }
                }
                return $ima;
            }

            $a=nule($niz);
            echo "<br>";
            var_dump($a);
    ?>
    <p>
       2. Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima 
        ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
        Koji dan je najuspesniji
        Kolika je prosecna uspesnost
        Razliku izmedju najbolje i najgore uspesnosti
    </p>

    <?php
            $nizzz=["ponedeljak"=>27,"utorak"=>29,"cetvrtak"=>28,"petak"=>28];


            function najupesniji_dan($n){
                $max=0;
                foreach($n as $i=>$el){
                    if($max < $el){ 
                        $max = $el; $ind = $i;
                    }
                }
                echo "Najuspesniji dan je $ind, a uspesnost je $max";
            }

            najupesniji_dan($nizzz);
            echo "<br>";

            function broj_domacih($n){
                $brojdomacih=0;
                    foreach($n as $i=>$el){
                        $brojdomacih++;
                    }
                return $brojdomacih;
                
            }
            
                $br=broj_domacih($nizzz);
                echo "Broj svih domacih je $br";
                echo "<br>";
                
            function zbir_domacih($n){
                $zbir=0;
                    foreach($n as $i=>$el){
                        $zbir += $el;
                    }
               return $zbir;
                
            }

               $z= zbir_domacih($nizzz);
               echo "Zbir domacih je $z";
               echo "<br>";


                $prosek=$z/$br;
                echo "Prosecna uspesnost je $prosek";
                echo "<br>";
          

                function min_i_max($n, $b){
                    if($b === "najveca"){
                        $max = max($n);
                        $ind = array_search($max, $n);
                        echo "Najveca uspesnost je $max u $ind";
                    }
                    if($b === "najmanja"){
                        $min = min($n);
                        $ind = array_search($min, $n);
                        echo "Najgora uspesnost je $min u $ind";
                    }
                }

                echo min_i_max($nizzz, "najveca");
                echo "<br>";
                echo min_i_max($nizzz, "najmanja");
        


                
                       

    ?>
</body>
</html>