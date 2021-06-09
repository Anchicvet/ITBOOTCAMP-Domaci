<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
    Napisati konstruktor koji dobija i  postavlja sve clanice.
    Napisati metodu za citanje cene.
    Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."

    Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.

    U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
    Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.


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
            $krevet1= new Krevet(200,160,'drvo', 40000);
            $krevet2= new Krevet(240,180,'drvo', 50000);

            if($krevet1 > $krevet2){
                echo "$krevet1";
            }else{
                echo "$krevet2";

            }
            echo "<br>";
            $krevet3= new Krevet(180,100,'metal', 25000);
            echo "$krevet3";
            echo "<br>";
            $krevet3= new Krevet(180,100,'metal', 25000);
            $k3=$krevet3->popust(10);
            echo "$k3";


           

    ?>
</body>
</html>