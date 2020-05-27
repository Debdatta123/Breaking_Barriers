<?php
// Database configuration
$dbHost     = "host";
$dbUsername = "your username";
$dbPassword = "your password";
$dbName     = "your database name";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>