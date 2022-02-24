<?php 

include_once "config.php";
session_start();

if(isset($_POST["register"])){
    $nick = $_POST["nickname"];
    $password = $_POST["pass"];
    
    $password = password_hash($_POST["pass"], PASSWORD_BCRYPT, array("cost" => 10));

    
    if ($nick && $password)
    {
        $sql = "INSERT INTO `vartotojai` (vardas, passw) VALUES (?, ?)";
        $stmt= $dbh->prepare($sql)->execute([$nick, $password]);

        $_SESSION['user'] = $user;

        header('Location: index.php');
        die();
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
  <form id="login-form" action="register.php" method="POST">
    <h1>REGISTRACIJA PASKYROS</h1>
    <p>
        <input type="text" name="nickname" placeholder="Slapyvardis" required>
    </p>
    <p>
        <input type="password" name="pass" placeholder="Paskyros slaptazodis" required>
    </p>
    <p>
        <input type="submit" name="register" value="REGISTRUOTI PASKYRA">
    </p>
  </form>
</body>
</html>
