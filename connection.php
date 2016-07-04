<?php

$dbCon = mysqli_connect("localhost", "root", "123456", "learnlearn");


if (mysqli_connect_errno()) {
    echo "Konekcijata e neuspesna: " , mysqli_connect_error();
}

?>
