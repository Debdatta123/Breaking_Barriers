<?php
// Database configuration
$dbHost     = "db4free.net";
$dbUsername = "breakingbarriers";
$dbPassword = "testing@test";
$dbName     = "breakingbarriers";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>