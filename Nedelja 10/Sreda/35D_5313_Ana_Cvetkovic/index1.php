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

             function izvrsi_select($upit){
                 $podaci =$this->conn->query($upit);
                 if($podaci === false)
                     return ['uspesno'=>false, 'poruka'=>$this->conn->error];
                 else{
                    $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                    return ['uspesno'=>true, 'niz'=>$niz];
                 }
             }

             function daj_id($drzava,$grad){
                $r = $this->izvrsi_select("select id_destinacije from destinacije WHERE drzava='$drzava' and grad='$grad'");
                if($r['uspesno'] == true){
                    return $r['niz'];
                }else{
                    die("Neuspesan upit: ".$r['poruka']);
                }
            }

            function daj_destinacije($id){
                $r = $this->izvrsi_select("select * from destinacije WHERE id_destinacije=$id");
                if($r['uspesno'] == true){
                    return $r['niz'];
                }else{
                    die("Neuspesan upit: ".$r['poruka']);
                }
            }

    

            function obrisi_putovanje($id){
                $this->izvrsi_select("DELETE * from spisak_putovanja WHERE id_putovanja=$id");
               

        }
        
    }
        $d= new Baza ('turisticka_agencija');

        ?>





       