<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_de_dados01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
