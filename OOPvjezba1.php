<?php

class Knjiga {
    public $isbn;
    public $naslov;
    public $autor;
    public $primjerak;


    public function __construct($isbn, $naslov, $autor, $primjerak){
        $this->isbn = $isbn;
        $this->naslov = $naslov;
        $this->autor = $autor;
        $this->primjerak = $primjerak;
    }

    public function knjigaAutor(){
        $rezultat= "Autor knjige " . $this->naslov . " je " . $this->autor;
        if(!$this->primjerak){
            $rezultat .= "Trenutno nije dostupno";
        }
        return $rezultat;
    }

    public function posudba(){
        if($this->primjerak <1){
            return false;
        } else {
            $this->primjerak--;
            return true;
        }
    }

}
    $ime_knjige1= new Knjiga(12564, "Alkemičar", "Paolo Coelho", 15);
    // $ime_knjige1->isbn= 12564;
    // $ime_knjige1->naslov="Alkemičar";
    // $ime_knjige1->autor="Paolo Coelho";
    // $ime_knjige1->primjerak=15;

    $ime_knjige2= new Knjiga(1561, "Harry Potter", "J.K Rowling", 0);

    if ($ime_knjige1->posudba()){
        echo "Ovo je vaš primjerak knjige " . $ime_knjige1->naslov;
    } else {
       echo "Knjiga " . $ime_knjige1->naslov . " trenutno nije dostupna." . "<br />";
    }

echo "<br />";

    if ($ime_knjige2->posudba()){
        echo "Ovo je vaš primjerak knjige " . $ime_knjige2->naslov;
    } else {
       echo "Knjiga " . $ime_knjige2->naslov . " trenutno nije dostupna." . "<br />";
    }

echo "<pre>";
var_dump($ime_knjige1) . "<br />";
var_dump($ime_knjige2) . "<br />";
echo "</pre>";

