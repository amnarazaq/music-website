<?php

$config = require('config.php');

$servername = $config['db']['host'];
$username = $config['db']['user'];
$password = $config['db']['pass'];
$database = $config['db']['dbname'];

// Create connection
$conn = mysqli_connect($servername, $username, $password );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected sucessful";

//create database
$sql = "CREATE DATABASE IF NOT EXISTS {$database}";
if (mysqli_query($conn, $sql)) {
    echo "Database ".$sql." created successfully";
	}
	 else {
    echo "Error creating database:<br> " . mysqli_error($conn);}

$sql2=mysqli_select_db($conn,"{$database}");

//users table
$user = "CREATE TABLE  IF NOT EXISTS users(
uid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(200) NOT NULL,
upassword VARCHAR(200) NOT NULL,
uemail VARCHAR(200) NOT NULL
)";
if (mysqli_query($conn, $user)) 
{
    echo "Table Users created successfully";
} else {
    echo " " . mysqli_error($conn);
}

//category table
$cat = "CREATE TABLE  IF NOT EXISTS categories(
Cid INT(10) UNSIGNED AUTO_INCREMENT ,
PRIMARY KEY (Cid),
Cname VARCHAR(200) NOT NULL
)";
if (mysqli_query($conn, $cat)) 
{
    echo "Table Categories created successfully";
	
} else {
    echo " " . mysqli_error($conn);
}

//albums table
$alb = "CREATE TABLE IF NOT EXISTS  albums(
Aid INT(10) UNSIGNED AUTO_INCREMENT ,
PRIMARY KEY (Aid),
Aname VARCHAR(200) NOT NULL,
release_date DATE,
views VARCHAR(200) NOT NULL,
category_id INT(10) UNSIGNED,
FOREIGN KEY(category_id) REFERENCES  categories(Cid)
)";
if (mysqli_query($conn, $alb)) 
{
    echo "Table albums created successfully";	
} else {
    echo " " . mysqli_error($conn);
}
//sub_category table
$sub = "CREATE TABLE IF NOT EXISTS sub_categories(
Sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Sname VARCHAR(200) NOT NULL)";
if (mysqli_query($conn, $sub)) 
{
    echo "Table sub_categories created successfully";
} 
else {
    echo " " . mysqli_error($conn);
}
//songs table
$song = "CREATE TABLE IF NOT EXISTS songs (
songid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(200) NOT NULL,
Singername VARCHAR(200) NOT NULL,
Playcount VARCHAR(200) NOT NULL,
Downloads VARCHAR(200) NOT NULL,
Path VARCHAR(200) NOT NULL,
category_id INT(10) UNSIGNED,
FOREIGN KEY(category_id) REFERENCES  categories(Cid),
subcategory_id INT(10) UNSIGNED,
FOREIGN KEY(subcategory_id) REFERENCES sub_categories(Sid),
album_id INT(10) UNSIGNED,
FOREIGN KEY(album_id) REFERENCES  albums(Aid)
)";
if (mysqli_query($conn, $song)) 
{
    echo "Table  songs  created successfully";
} 
else {
    echo " " . mysqli_error($conn);
}

mysqli_close($conn);
?>
