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

             function prikazi_destinacije(){
                $r= $this->izvrsi_upit("select * from destinacije");
                if($r ['uspesno']== true){
                    return $r['niz'];
                }else{
                    die("neuspesan upit:". $r['poruka']);
                   
                }
            }

            function prikazi_putnike(){
                    $r= $this->izvrsi_upit("select * from putnici");
                if($r ['uspesno']== true){
                    return $r['niz'];
                }else{
                    die("neuspesan upit:". $r['poruka']);
                }

            }
             
          

            function otkazi_rezervaciju($vr){
                $r= $this->izvrsi_upit("DELETE FROM spisak_putnika WHERE broj_pasosa=$vr");
                if($conn->query($sql) === false) {
                    die('JOK: ' . $conn->error);
               } else {
                  $brr = $conn->affected_rows;
                  echo "Broj obrisanih redova je: ".$brr; 
               }
               
               

            }
        }

        $d= new Baza ('turisticka_agencija');
       

?>