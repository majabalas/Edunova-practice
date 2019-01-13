<?php

class Osoba {

public $ime;
public $prezime;
public $kontaktBroj;
public $prisutan;

public function dolazak(){
    if ($this->prisutan == 0){
        return false;
    } if ($this->prisutan > 0){
        return true;
    }
}


public function __construct($ime, $prezime, $kontaktBroj, $prisutan){
    $this->ime=$ime;
    $this->prezime=$prezime;
    $this->kontaktBroj=$kontaktBroj;
    $this->prisutan=$prisutan;
    }

}

$osobaJedan = new Osoba("Maja", "Balaš", "098/111-2222", 0);
$osobaDva = new Osoba("Zeljko", "Livaja", "098/333-4444", 1);

if ($osobaJedan->dolazak()){
        echo $osobaJedan->ime . " " . $osobaJedan->prezime . " je na satu!";
    } 
    else {
        echo $osobaJedan->ime . " " . $osobaJedan->prezime . " nije na satu!";
    } 

echo "<br / >";

if ($osobaDva->dolazak()){
        echo $osobaDva->ime . " " . $osobaDva->prezime . " je na satu!";
    } 
    else {
        echo $osobaDva->ime . " " . $osobaDva->prezime . " nije na satu!";
    } 

echo "<pre>";
var_dump($osobaJedan);
var_dump($osobaDva);
echo "</pre>";