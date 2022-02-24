<?php

include_once "config.php";
session_start();

if (!isset($_SESSION["user"]))header("location: login.php");
else if(isset($_POST["logout"])){
  session_destroy();
  header("location: login.php");  
}

else if(isset($_GET["patinka"])){
  $sth = $dbh->query('SELECT * FROM meistrai;');
  $info = $sth->fetch(PDO::FETCH_ASSOC);
  $ivertis = $info["ivertis"];
  $id=$_GET["patinka"];

  $sql = "UPDATE `meistrai` SET `ivertis` = `ivertis` + 1 WHERE `id` = ?";
  $stmt= $dbh->prepare($sql)->execute([$id]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <form method="POST">
      <input type="submit" id="btn" name="logout" value="Atsijungti iš paskyros">
    </form>
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
            <p>Įvertinimai: <b><span>'. $ivertis .'</span></b>
            <a href="?patinka='. $id .'"> <i class="fa fa-heart" style="color: red; position: relative; left: 150px;"></i></a></p>
          </div>
          </div>';
      }
  ?>
  </div>
</body>
</html>
