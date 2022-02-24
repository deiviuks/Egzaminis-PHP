<?php

include_once "config.php";


if(isset($_POST["istrinti"])){
    $id = $_GET["id"];
        
    $sql = "DELETE FROM `meistrai` WHERE `id` = ?";
    $stmt= $dbh->prepare($sql)->execute($id);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <?php
      $sth = $dbh->query('SELECT * FROM meistrai;');
      while ($info = $sth->fetch(PDO::FETCH_ASSOC)) {
        $pavadinimas = $info["pavadinimas"];
        $miestas = $info["miestas"];
        $vardas = $info["vardas"];
        $pavarde = $info["pavarde"];
        $specializacija = $info["specializacija"];
        $ivertis = $info["ivertis"];
        $id = $info["id"];
        echo '

        <div class="card">
          <div class="card-header">
            <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
          </div>
          <div class="card-body">
            <h4><b>'. $pavadinimas .'</b></h4>
            <p>Miestas: <b> '. $miestas .'</b></p>
            <p>Vardas: <b>'. $vardas .'</b></p>
            <p>Vardas: <b>'. $pavarde .'</b></p>
            <p>Specializacija: <b>'. $specializacija .'</b></p>
            <form method="POST action="istrinti.php">
                <a href="?istrinti='. $id .'"><button type="submit" name="istrinti" value='. $id .'>Ištrinti naujieną</button></a>
            </form>
          </div>
          </div>';
      }
  ?>
  </div>
</body>
</html>