<?php
        include "index1.php";
        include "index2.php";
        

        if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj'){
            $id=$_GET ('id_proizvoda');
            $proizvod=$b->daj_proizvod($id);
            $k->dodaj_proizvod($id, $proizvod['naziv'],$proizvod['cena'], 1);
            $k->prikazi();
        }


   


?>