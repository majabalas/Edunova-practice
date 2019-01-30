
 <?php
include_once "PDO.php";


$uvjet = $_GET["sifra"];

$izraz = $db->prepare("select * from korisnik where sifra=:sifra");

$izraz->execute($_GET);

$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

 
foreach($rezultati as $row){
   $korisnickoIme = $row->korisnickoIme;
   $lozinka = $row->lozinka;
}
?>
 

 <form action="izmijeni.php" method="post">
    <input type="hidden" name="sifra"  value=" <?php echo $_GET["sifra"]; ?> "/>
    <input type="text" name="korisnickoIme" value="<?php echo $korisnickoIme ?>" placeholder="korisnicko ime" />
    <input type="text" name="lozinka" value="<?php echo $lozinka ?>" placeholder="lozinka" />    
    <input type="submit" value="Izmijeni" />
</form>