<?php

// Connect to mysql database
$servername = "localhost";
$username = "root";
$password = ""; 
$db = "shop";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE TABLE shop.credentials (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table credentials created successfully"; 
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();  

?>