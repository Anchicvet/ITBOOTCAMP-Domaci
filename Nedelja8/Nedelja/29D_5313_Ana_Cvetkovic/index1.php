<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Napraviti klasu SastojakHrane koja ce imati clanice:
     naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" 
     koja samo prikazuje sve podatke zajedno u jednom paragrafu.
 </p>

    <?php
        class SastojakHrane{
                public $naziv, $mera, $kalorije;

                function __construct($naziv, $mera, $kalorije){
                    $this->naziv = $naziv;
                    $this->mera = $mera;
                    $this->kalorije = $kalorije;
                }

                function promenimeru($mera){
                    $this->mera = $mera;
                }

                function prikazi_sastojke(){
                    echo "<p>Naziv sastojka je ". $this->naziv.", ima meru ". $this->mera."i ima ".$this->broj." kalorija</p>";

            }
        }

    ?>

        <p>Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. 
        U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, 
        a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
        Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

        Proveriti kod sledecim naredbama:
    

        </p>

        <?php
            class Jelo{
                public $naslov, $opis, $podaci;

                function __construct($naslov, $opis, $podaci){
                    $this->naslov = $naslov;
                    $this->opis = $opis;
                    $this->podaci = [];

                }

                function dodaj_podatke($podaci){
                    for($i=0; $i<count($podaci); $i++){
                        $p = new SastojakHrane($podaci[$i]);
                        array_push($this->podaci, $p);
                    }
        
                }

                function promenimeru1($mera){
                    foreach($this->podaci as $jelo)
                        if($jelo->mera == $mera)
                            $jelo->prikazi_sastojke();
                }

                function prikazi_jelo(){
                    echo "<p>Naziv jela je ". $this->naslov.", opis ovog jela ". $this->opis."</p>";

            }
            }

            $podaci = [
                ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
                ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
                ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
                ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
            ];

            $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
            $jelo->prikazi_jelo();
            $jelo->promeniMeru1("brasno", "400g");
            $jelo->prikazi_jelo();

        ?>
</body>
</html>