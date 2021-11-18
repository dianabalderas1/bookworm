<?php
// set up MySQL connection
// establish a connection to main page
$host = 'localhost';
$user = 'dbalderas';
$password = 'nirr<5Nat';
$database = 'bookworm';
static $conn;
$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_connect_error());

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>