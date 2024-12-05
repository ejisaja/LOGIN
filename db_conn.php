<?php
$host = "localhost";
$user = "root"; // Default user XAMPP
$pass = ""; // Default password kosong di XAMPP
$db_name = "asas";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    echo "Connection failed";
}

