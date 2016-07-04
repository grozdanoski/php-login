<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Log out page</title>
</head>

<body>
<a href="index.php">Click to here to return to the login page.</a>
</body>
</html>
