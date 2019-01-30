<?php
include_once "PDO.php";

 
$izraz=$db->prepare("update korisnik SET korisnickoIme=:korisnickoIme, lozinka=:lozinka
 WHERE sifra=:sifra ");

$izraz->execute($_POST);
header("location: index.php");