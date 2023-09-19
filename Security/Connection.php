<?php
$servername = "localhost"; // Change to your MySQL server hostname (usually "localhost" for XAMPP)
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password (if you have one)
$database = "tvms"; // Change to the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<div></div>";
}
?>