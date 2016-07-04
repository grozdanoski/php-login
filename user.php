<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if(isset($_SESSION['id'])){
    $userId = $_SESSION['id'];
    $username = $_SESSION['username'];
}
else{
    header('Location: index.php');
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome USER</title>
</head>

<body>

<h1>Hello there <?php echo $username; ?>! You have sucessfully logged in.</h1>

<br/><br/>

<form action="logout.php">
    <input type="submit" value="Log out">
</form>

</body>
</html>
