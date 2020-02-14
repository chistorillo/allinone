<?php

$servername = "db"; // This will be modified. 
$username = "user";
$password = "test";
$database = "myDb"; // Direct connection to the schema.


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>