<?php

$config = require('config.php');

$servername = $config['db']['host'];
$username = $config['db']['user'];
$password = $config['db']['pass'];
$database = $config['db']['dbname'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected sucessful";


// seed categories
$categories = [
	'hollywood', 'bollywood', 'lollywood', 'punjabi', 'tamil'
];

foreach ($categories as $category) {
	mysqli_query($conn, "INSERT INTO categories(Cname) VALUES ('{$category}')");
}

// seed  sub categories
$subCategories = [
	'pop', 'romantic', 'classic', 'sad', 'rock', 'mashup','wedding'
];

foreach ($subCategories as $category) {
	mysqli_query($conn, "INSERT INTO sub_categories(Sname) VALUES ('{$category}')");
}

// seed albums
$albums = [
	['baazi', date('Y-m-d', strtotime('2018-01-25')), 0, 3],
	['dil zafran', date('Y-m-d', strtotime('2016-12-02')), 0, 3],
	['loveratri', date('Y-m-d', strtotime('2017-05-01')), 0, 2],
	['qaafirana', date('Y-m-d', strtotime('2018-03-12')), 0, 2],
	['tera fitoor', date('Y-m-d', strtotime('2018-01-01')), 0, 2],
];

foreach ($albums as $album) {
	mysqli_query($conn, "INSERT INTO albums(Aname, release_date, views, category_id) VALUES ('{$album[0]}', '{$album[1]}', {$album[2]}, {$album[3]})");
}


// seed songs
$songs = [
	['laung lachi', 'Mannat Noor', 0, 0,'./songs/laung_lachi.mp3',4,7,'NULL'],
	['dil diya gallan', 'Atif aslam', 0, 0,'./songs/dil_diya_gallan.mp3',4,7,'NULL'],
	['afreen afreen', 'Rahat fateh ali khan', 0, 0,'./songs/afreen_afreen.mp3',3,2,'NULL'],
];

foreach ($songs as $song) {
	$query = "INSERT INTO songs(Title, Singername, Playcount, Downloads, Path, category_id, subcategory_id, album_id) VALUES ('{$song[0]}', '{$song[1]}', {$song[2]}, {$song[3]}, '{$song[4]}', {$song[5]}, {$song[6]}, {$song[7]})";
	
	if (mysqli_query($conn, $query)) 
	{
	    echo "Song Added successfully";
	} 
	else {
	    echo " " . mysqli_error($conn);
	}
}
