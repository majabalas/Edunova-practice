<?php include_once "select.php";
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezerviraj Event!</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
  
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="uvjet" value="<?=$uvjet; ?>" />
        <input type="submit" value="Pretraži" class="button" />
      </form>

      <table>
        <thead>
          <tr>
            <th>korisnickoIme</th>
            <th>lozinka</th>
            <th>Izmjene</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach($rezultati as $row): ?>

          <tr>
            <td><?=$row->korisnickoIme?></td>
            <td><?=$row->lozinka?></td>
            <td><a href="obrisi.php?sifra=<?=$row->sifra?>">Obriši</a>
            <a href="update.php?sifra=<?=$row->sifra?>">Izmijeni</a></td>
          </tr>

          <?php endforeach;?>
        </tbody>
      </table>
      <a href="novi.php" class="button">Novi unos</a>

 </div>

        

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
