<?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_registers";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn){
        die("Something went wrong!");
    }

?>