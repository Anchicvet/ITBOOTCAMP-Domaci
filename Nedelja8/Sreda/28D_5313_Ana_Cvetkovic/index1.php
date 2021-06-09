<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        1.Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, 
        i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
        Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice

        2.Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. 
        Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
        (Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")

    </p>
    <?php
            class Krevet{
                public $duzina, $sirina, $materijal;
                private   $cena;

                public function __construct($duzina, $sirina, $materijal, $cena){
                    $this->duzina=$duzina;
                    $this->sirina=$sirina;
                    $this->materijal=$materijal;
                    $this->cena=$cena;
                }
                public function ocitaj_cenu(){
                    return $this->cena;
                }
                public function __toString(){
                    return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina. " napravljen je od materijala ".$this->materijal. " po ceni ".$this->ocitaj_cenu();
                }

                public function popust($popust){
                    $cenasapopustom=$this->ocitaj_cenu()-($this->ocitaj_cenu()*($popust/100));
                    return $cenasapopustom;
                   
                }
            }

        class Baldahin extends Krevet{
                
            public $visina, $cenabaldahina;

            public function __construct($duzina, $sirina, $materijal, $cena, $visina, $cenabaldahina){
                 $this->visina = $visina;
                 $this->cenaBaldahina = $cenabaldahina;
                 parent::__construct($duzina, $sirina, $materijal, $cena);
            }

            public function daj_cenu(){
                return $this->ocitaj_cenu();
            }

            public function cena_sa_baldahinom(){
               return $zbir= $this->daj_cenu()+$this->cenabaldahina;

            }

            public function __toString(){
                 return "Cena kreveta bez bladahina je ".$this->daj_cenu()." a cena kreveta sa baldahinom je ". $this->cena_sa_baldahinom();
            }
            
        }

        $krevetsabaldahinom1= new Baldahin( 200, 160,'drvo',50000, 190, 8000);
        
        echo "$krevetsabaldahinom1";
       

    ?>
</body>
</html>