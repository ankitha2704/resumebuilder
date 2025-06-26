<?php
$servername = "localhost";  // or the server where your database is hosted
$username = "root";         // your MySQL username
$password = "";             // your MySQL password
$dbname = "resume_builder"; // the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

