<?php
$servername = "localhost"; // or 127.0.0.1
$username = "root";        // default XAMPP username
$password = "";            // default is empty
$database = "nutrilift";   // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment this to test connection
?>
