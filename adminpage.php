<?php

if (isset($_GET["prideti"]))include_once("prideti.php");
else if (isset($_GET["istrinti"]))include_once("istrinti.php");

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
    <h2>ADMINISTRAVIMO PULTAS</h2>
    <div class="sidebar">
        <a href="index.php" class="btn">GRĮŽTI Į PAGRINDINĮ</a>
        <a href="?prideti" class="btn">PRIDĖTI MEISTRĄ</a>
        <a href="?istrinti" class="btn">IŠTRINTI MEISTRĄ</a>
    </div>
</body>
</html>