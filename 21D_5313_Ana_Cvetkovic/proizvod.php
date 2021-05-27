<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
        <style>
                .proizvod{
                    width: 200px;
                    display:inline-block;
                    border:1px solid black;
                    text-align:center;
                    font-size:26px;
                }
                img{
                    width:200px;
                    height:200px;
                }
                .cena{
                    color:red;
                }
                .cenap{
                    color:green;
                   
                }
              .cene{
                    font-size:20px;
                    
                }
        </style>
<body>
    
    <?php
        function div($imeproizvoda, $slika, $cena, $popust){
            echo "<div class='proizvod'>
                    $imeproizvoda
                    <div>
                        $slika
                    </div>
                        <div class='cene'>";
                        if($popust > 0){
                            echo "<p class='cena'>Cena proizvoda je $cena</p>
                                    <p class='cenap'>Cena sa popustom je ".($cena*($popust/100))."</p>";
                        }if($popust == 0){
                            echo "<span >Cena proizvoda je $cena</span>";  
                        }
                 echo  "</div>
                 </div>";
        }


        $pr="Harry Potter And The Order Of Phoenyx";
        $s= "<img src='haripoter.jpg' alt=slika>";
        $c=mt_rand(800,1500);
        $po=mt_rand (0,100);

        div($pr,$s,$c,$po);

    ?>
   
</body>
</html>