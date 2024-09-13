<?php
$hostName = "localhost";
$dbUser = "root"; // Corrected variable name
$dbPassword = "";
$dbName = "login-register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
?>
 