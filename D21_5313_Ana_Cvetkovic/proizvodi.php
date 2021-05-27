<?php
    require_once ("proizvod.php");
?>
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
            $pr1="Harry Potter And The Half Blood Prince";
            $s1= "<img src='haripoter1.jpg' alt=slika>";
            $c1=mt_rand(800,1500);
            $po1=mt_rand (0,100);

            $pr2="Harry Potter And The Sorcerer's stone";
            $s2= "<img src='haripoter2.jpg' alt=slika>";
            $c2=mt_rand(800,1500);
            $po2=mt_rand (0,100);

            $pr3="Harry Potter And The Deathly Hallows";
            $s3= "<img src='haripoter3.jpeg' alt=slika>";
            $c3=mt_rand(800,1500);
            $po3=mt_rand (0,100);

            div($pr1,$s1,$c1,$po1);
          
            div($pr2,$s2,$c2,$po2);
            
            div($pr3,$s3,$c3,$po3);
        ?>
</body>
</html>