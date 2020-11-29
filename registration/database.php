<?php

$servername = "localhost";
$usernam = "root";
$password = "";
$dbname = "NATS96322022";

// Create connection
$conn = new mysqli($servername, $usernam, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>