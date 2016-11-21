<?php
$server_name = "45.32.40.202";
$username = 'root';
$password = "GtbuCwv5DuE8l22F";


// Create connection
$conn = mysqli_connect($server_name, $username, $password,'kmtest');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf-8');
?>
