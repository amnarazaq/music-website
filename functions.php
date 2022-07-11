<?php

function getCategorySongsList($categoryId, &$conn) {
	if (empty($categoryId) || !($conn instanceof MySQLi)) {
		return [];
	}

	$response  = [];
	$query = "SELECT * FROM songs WHERE category_id = {$categoryId}";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}

function getAlbumSongsList($albumId, &$conn) {
	if (empty($albumId) || !($conn instanceof MySQLi)) {
		return [];
	}

	$response  = [];
	$query = "SELECT * FROM songs WHERE album_id = {$albumId}";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}

function getSubcategorySongsList($subcategoryId, &$conn) {
	if (empty($subcategoryId) || !($conn instanceof MySQLi)) {
		return [];
	}

	$response  = [];
	$query = "SELECT * FROM songs WHERE subcategory_id = {$subcategoryId}";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}


function getCategories(&$conn) {
	$response  = [];
	$query = "SELECT * FROM categories";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}

function getCategoriesList(&$conn) {
	$categories = getCategories($conn);
	$response = [];
	foreach ($categories as $category) {
		$response[] = [
			'id' => $category['Cid'],
			'title' => $category['Cname'],
			'image' => "http://" .ROOT_PATH . 'images/categories/'. $category['Cname'] . '.jpg' 
		];
	}

	return $response;
}

function getAlbums(&$conn) {
	$response  = [];
	$query = "SELECT * FROM albums";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}

function getAlbumsList(&$conn) {
	$albums = getAlbums($conn);
	$response = [];
	foreach ($albums as $album) {
		$response[] = [
			'id' => $album['Aid'],
			'title' => $album['Aname'],
			'release_date' => $album['release_date'],
			'views' => $album['views'],
			'image' => "http://" .ROOT_PATH . 'images/albums/'. $album['Aname'] . '.jpg' 
		];
	}

	return $response;
}


function getSubCategories(&$conn) {
	$response  = [];
	$query = "SELECT * FROM sub_categories";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$response[] = $row;
	    }
	}

	return $response;
}

function getSubCategoriesList(&$conn) {
	$subCategories = getSubCategories($conn);
	$response = [];
	foreach ($subCategories as $subCategory) {
		$response[] = [
			'id' => $subCategory['Sid'],
			'title' => $subCategory['Sname'],
			'image' => "http://" .ROOT_PATH . 'images/discover-music/'. $subCategory['Sname'] . '.jpg' 
		];
	}

	return $response;
}

