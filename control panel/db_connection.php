<?php
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "rafif"; // Your database name

// Create connection
$connect_db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect_db->connect_error) {
    die("Connection failed: " . $connect_db->connect_error);
}
?>