<?php

include_once "PDO.php";

$uvjet = isset($_GET["uvjet"]) ? $_GET["uvjet"] : "";

$izraz = $db->prepare("select * from korisnik where korisnickoIme like :uvjet");

$izraz->execute(["uvjet"=> "%" . $uvjet . "%" ]);

$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);