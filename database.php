<?php

// Included Files
// Env
include __DIR__ . "/env.php";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn && $conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>
