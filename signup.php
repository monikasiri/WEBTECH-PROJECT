<?php

// Connect to the database
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get input values
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password']; 

// Insert data into credentials table
$sql = "INSERT INTO credentials (email, username, password) VALUES ('$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully"; 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Redirect back to sign in page
header("Location: signin.html"); 

$conn->close();

?>