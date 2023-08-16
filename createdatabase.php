<?php

// Connect to mysql database 
$servername = "localhost";
$username = "root"; 
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE shop";
if ($conn->query($sql) === TRUE) {
  echo "Database shop created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

?>