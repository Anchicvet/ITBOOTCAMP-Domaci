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
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];
           print_r($x);
    ?>
    <p>1.Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)</p>
    <?php
        $y = array_map(function($osoba){
            $osoba['godines']=" ";
            for($i=0; $i<1; $i++)
                $osoba['godines'][$i] = mt_rand(1, 3);
            return $osoba;
        }, $x);

        print_r($y);
        

    ?>
    <p>2.Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
    </p>
    <?php
            function prikazi_osobu($osoba){
                echo "<p>".join(",", $osoba)."</p>";
            }
            function prikazi_osobe($y){
                for($i=0; $i<count($y); $i++)
                    prikazi_osobu($y[$i]);
            }
            
            usort($y, function($a, $b){
                if($a['godines'] > $b['godines']){
                    return -1;
                }elseif($a['godines'] == $b['godines']){
                    return ($a['godine'] < $b['godine']);
                }else{    
                    return 1;
                }

            });
               echo  prikazi_osobe($y);
    ?>
     <p>Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)
    </p>
     <?php
           
                $max = 0;
                for($i=0; $i<count($y); $i++)
                    if($max < $y[$i]['godines'])
                    $max = $y[$i]['godines'];


            $najduzi_staz = array_filter($y,function($osoba){
                global $max;
                 $niz = []; 
                for($i=0; $i<count($osoba); $i++){
                    if($max === $osoba['godines'])
                    array_push($niz, $osoba['ime']);
                }
                return $niz;
             });

             print_r($najduzi_staz);
        
            

    ?>
</body>
</html>