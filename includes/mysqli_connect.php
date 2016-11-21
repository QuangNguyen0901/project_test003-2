<?php
$server_name = "localhost";
$username = 'root';
$password = "";


// Create connection
$conn = mysqli_connect($server_name, $username, $password,'kmtest');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf-8');
?>
