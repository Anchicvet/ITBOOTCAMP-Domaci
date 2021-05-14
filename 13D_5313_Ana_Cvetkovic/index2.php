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
        $r1 = mt_rand (1,100);
        $r2 = mt_rand (1,100);
        $r3 = mt_rand (1,100);
      

        if( $r1 < $r2 ){
	        if($r1 < $r3)
	            {if($r2 < $r3)
		            {echo "$r1 ,$r2, $r3";
		        }else
		            {echo "$r1, $r3, $r2";
		            }
            }else
	                {echo "$r3, $r1, $r2";
	                }
        }else
            {if($r2 < $r3)
	            {if($r1 < $r3)
		        {echo "$r2, $r1, $r3";
		        }else
		        {echo "$r2, $r3, $r1";	
		        }
	        }else
	            {echo "$r3, $r2 ,$r1";
	        }
            }
    ?>
</body>
</html>