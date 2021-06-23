<?php
        class Baza{
            public $conn;

            function __construct($baza){
                $this->conn = new mysqli('localhost', 'root', '', $baza);
           
                if ($this->conn->connect_error)
                    die('Greska: '. $this->conn->connect_error);
                else
                    echo 'Konektovan!';        
                
            }

             function izvrsi_upit($upit){
                 $podaci =$this->conn->query($upit);
                 if($podaci === false)
                     return ['uspesno'=>false, 'poruka'=>$this->conn->error];
                 else{
                    $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                    return ['uspesno'=>true, 'niz'=>$niz];
                 }
             }

             function prikazi_proizvode(){
                $r= $this->izvrsi_upit("select * from proizvodi");
                if($r ['uspesno']== true){
                    return $r['niz'];
                }else{
                    die("neuspesan upit:". $r['poruka']);
                   
                }
            }


            function daj_proizvod($id){
                $r= $this->izvrsi_upit("select * from proizvodi where barkod=$id");
                if($r ['uspesno']== true){
                    return $r['niz'];
                }else{
                    die("neuspesan upit:". $r['poruka']);
                   
                }
            }
        }

    $b= new Baza('test2');
    
?>


