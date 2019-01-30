<?php

include_once "PDO.php";

$izraz=$db->prepare("
    delete from korisnik where sifra=:sifra
");

$izraz->execute($_GET);

header("location: index.php");