<?php

include_once "config.php";
session_start();

if(isset($_POST['login'])){
  $user = $_POST['nickname'];
  $pass = $_POST['pass'];
  
  $sql = "SELECT `vardas`, `passw` FROM `vartotojai` WHERE `vardas`=? ";
  $query = $dbh->prepare($sql);
  $query->execute(array($user));
  $row = $query->fetch(PDO::FETCH_ASSOC);
  
  $hash = $row['passw'];

  if($query->rowCount() > 0)
  {
      if(password_verify($pass, $hash))
      {
          $_SESSION['user'] = $user;
          header("location: index.php");
      }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <form id="login-form" action="login.php" method="POST">
    <h1>PRISIJUNGIMAS</h1>
    <p>
        <input type="text" name="nickname" placeholder="Slapyvardis" required>
    </p>
    <p>
        <input type="password" name="pass" placeholder="Paskyros slaptažodis" required>
    </p>
    <p>
        <input type="submit" name="login" value="Prisijungti prie paskyros">
    </p>
  </form>
</body>
</html>
