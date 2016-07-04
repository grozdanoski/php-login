<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']){
    include_once("connection.php");
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";

    $query = mysqli_query($dbCon, $sql);

    if($query){
        $row = mysqli_fetch_row($query);
        $userId = $row[0];
        $dbUsername = $row[1];
        $dbPassword = $row[2];
    }

    if($username == $dbUsername && $password == $dbPassword){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userId;
        header('Location: user.php');
    }
    else{
        echo "Podatocite koi gi vnesovte ne pogresni.";
    }

}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Najava</title>
</head>

<body>

<h1>Ve molime najavete se</h1>

<form method="post" action="index.php">
    <input type="text" placeholder="Korisnicko ime" name="username"><br/>
    <input type="password" placeholder="Lozinka" name="password"><br/>
    <input type="submit" name="submit" value="Najava">
</form>

</body>

</html>

