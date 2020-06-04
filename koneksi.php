<?php
// Connect ke database
$db_host = 'localhost';
$db_database = 'db_starbhak';
$db_username = 'root';
$db_password = '';
$db_port = '3306';

// Create koneksi
$conn = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);

// Check koneksi
if ($conn->connect_error) {
    die('Connection failed:' . $conn->connect_error);
}
