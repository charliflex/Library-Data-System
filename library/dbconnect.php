<?php
$servername = "localhost";
$user = "root";
$password = "";
$DATABASE_NAME = "library";

// Create a connection
$conn = new mysqli($servername, $user, $password, $DATABASE_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
