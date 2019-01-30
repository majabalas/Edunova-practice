<?php

include_once "PDO.php";

$izraz = $db->prepare("

    insert into korisnik (korisnickoIme, lozinka)
    values (:korisnickoIme,:lozinka)

    ");

$izraz->execute($_POST);
header("location: index.php");