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
            
         
    ?>
    <p>1.Dodati u gornji niz jos 4 osobe po zelji. </p>
    <?php

         $y=[ 
            ['ime'=>"Ana", "godine"=>30, "grad"=>"Krusevac", "pozicija"=>"dizajner"],
            ['ime'=>"Veljko", "godine"=>27, "grad"=>"Bg", "pozicija"=>"developer"],
            ['ime'=>"Bojan", "godine"=>31, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Isidora", "godine"=>28, "grad"=>"Krusevac", "pozicija"=>"developer"]
          ];

          $a= array_merge($x,$y);
           print_r($a);

    ?>
    <p> 2.Napisati fju koja prikazuje imena svih programera</p>
    <?php

            function imena_svih($n){
                for($i=0; $i<count($n); $i++){
                        if($n[$i] ['pozicija'] === 'programer'){
                            echo "<p>".$n[$i] ['ime']. "</p>";
                        }
                 }

            }

            imena_svih($a);

    ?>
    <p>3.Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
    </p>
    <?php
            function podaci($n,$osoba){
                $imena=[];
                foreach($n as $el ){
                       if($el['ime']== $osoba){
                           echo join(",",$el);
                       }
                       if(stripos($el['ime'], "s")===true){
                        array_push ($imena,$el['ime']);
                    }
                }
                echo "<p>".join(",", $imena). "</p>";

            }

            

           
            podaci($a,"Isidora");

    ?>
</body>
</html>