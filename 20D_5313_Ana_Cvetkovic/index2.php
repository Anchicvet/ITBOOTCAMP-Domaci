<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <p>Написати функцију која враћа div 
    унутар којег се налази N span елемената који за текст имају
    редом бројеве од 1 до N</p>
<body>
    <?php
          
            function span($n){
                for($i=1; $i<=$n; $i++){
                    echo "<span>$i</span>";
                }
            }


            function div($n){
                return "<div>". span(5). "</div>";
            }
         
          $d=div(5);
          echo "$d";
            

    ?>
</body>
</html>