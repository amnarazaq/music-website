<?php

$config = require('config.php');

// Create connection
$conn = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['pass']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS " . $config['db']['dbname'];
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($config['db']['dbname']);

// Create Users table
$sql = "CREATE TABLE IF NOT EXISTS Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
password CHAR(32),
created_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
