<?php
$servername = "localhost";
$username = "harshitethic_college";
$password = "O}EXoSnxUKV1";
$dbname = "harshitethic_college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}