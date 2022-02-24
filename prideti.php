<?php

include_once "config.php";

if(isset($_POST["pridetimeistra"])){
    $vardas = $_POST["vardas"];
    $pavarde = $_POST["pavarde"];
    $miestas = $_POST["miestas"];
    $pavadinimas = $_POST["pavadinimas"];
    $specializacija = $_POST["specializacija"];
    
    if ($vardas && $pavadinimas && $miestas)
    {
        $sql = "INSERT INTO `meistrai` (vardas, pavarde, miestas, pavadinimas, specializacija) VALUES (?, ?, ?, ?, ?)";
        $stmt= $dbh->prepare($sql)->execute([$vardas, $pavarde, $miestas, $pavadinimas, $specializacija]);

        header('Location: index.php');
        die();
    }
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
    <form id="login-form" action="prideti.php" method="POST">
    <h1>MEISTRO PRIDĖJIMAS</h1>
    <p>
        <input type="text" name="vardas" placeholder="Vardas" required>
    </p>
    <p>
        <input type="text" name="pavarde" placeholder="Pavardė" required>
    </p>
    <p>
        <input type="text" name="miestas" placeholder="Miestas" required>
    </p>
    <p>
        <input type="text" name="pavadinimas" placeholder="Serviso pavadininimas" required>
    </p>
    <p>
        <input type="text" name="specializacija" placeholder="Specializacija" required>
    </p>
    <p>
        <input type="submit" name="pridetimeistra" value="PRIDĖTI MEISTRĄ">
    </p>
  </form>
</body>
</html>