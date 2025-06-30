<?php
$host = "localhost";
$user = "WWonKHa";
$pass = "WWonKHa";
$dbname = "wonka";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>