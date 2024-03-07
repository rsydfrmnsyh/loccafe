<?php

$username = "rasyad";
$password = "eref3021";
$database = "loccafe";

$conn = new mysqli('localhost', $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>