<?php
$dbName = "login_cosmo";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
die("Sorry!Something went wrong!");
}
?>
