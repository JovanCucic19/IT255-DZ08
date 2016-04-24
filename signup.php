<?php
include ("conn.php");


global $conn;

$username = isset($_POST["username"]) ? $_POST["username"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO korisnici (username, email, password) VALUES ('$username','$email', '$password')";
$conn->query($sql);
$conn->close();



header("Location: index.php")


?>
