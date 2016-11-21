<?php
$server_name = "ns1.vultr.com";
$username = 'root';
$password = "GtbuCwv5DuE8l22F";


// Create connection
$conn = mysqli_connect($server_name, $username, $password,'kmstest');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf-8');
?>
