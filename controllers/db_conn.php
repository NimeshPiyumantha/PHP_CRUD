<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}
//echo "Connected successfully";