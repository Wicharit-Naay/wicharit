<?php
$db_host = "localhost";
$db_user = "root"; 
$db_pass = "Pw_660109140636769"; 
$db_name = "4115db";
$db_charset = "utf8mb4"; 


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, $db_charset);
?>
