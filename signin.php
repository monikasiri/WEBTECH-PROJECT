<?php
session_start();

$servername = "localhost";
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli($servername, "root", "", "shop");
$sql = "SELECT password FROM credentials WHERE username = '$username';";
$res = $conn->query($sql);
if ($res->num_rows == 1) {
    $row = $res->fetch_assoc();
    $db_password = $row['password'];
    if (strval($db_password) === $password) {
        setcookie("username", $username, time() + (86400 * 30), "/");
        setcookie("loggedin", "true", time() + (86400 * 30), "/");
        echo "<script>alert('Login Successful!!');</script>";
        echo "<script>window.location.href = 'Main.html';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid username or password!')</script>";
        echo "<script>window.location.href = 'signin.html';</script>";
    }
} else {
    echo "<script>alert('Invalid username or password!')</script>";
    echo "<script>window.location.href = 'signin.html';</script>";
}

?>