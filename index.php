<?php

define('ROOT_PATH', $_SERVER['SERVER_NAME'] . '/projectResponsive/');

require('layout/header.php');
require('layout/banner/main-banner.php');
require('functions.php');

$config = require('config.php');

$servername = $config['db']['host'];
$username = $config['db']['user'];
$password = $config['db']['pass'];
$database = $config['db']['dbname'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


$categories = getCategoriesList($conn);
$albums = getAlbumsList($conn);
$subCategories = getSubCategoriesList($conn);

if (!empty($categories)) { ?>
<!-- Category Section -->
<section>
	<div class="container my-5">
		<h1>Categories</h1>
		<div class="owl-carousel categories">
			<?php foreach($categories as $category) { ?>
				<div class="item mx-3">
			    	<a href="./songlist.php?category=<?php echo $category['id']; ?>">
				    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
				    		<img src="<?php echo $category['image']; ?>">
				    		<h3 class="text-primary"><?php echo ucfirst($category['title']); ?></h3>
				    	</div>
			    	</a>
			    </div>
			<?php } ?>
		</div>
	</div> <!-- Ending container-->
</section>
<?php } ?>

<?php if (!empty($albums)) { ?>
<!-- Album Section -->
<section>
	<div class="container my-5">
		<h1>Albums</h1>
		<div class="owl-carousel album">
			<?php foreach ($albums as $album) { ?>
			    <div class="item mx-3">
			    	<a href="./songlist.php?album=<?php echo $album['id']; ?>">
				    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
				    		<img src="<?php echo $album['image'] ?>">
				    		<h3 class="text-primary"><?php echo ucwords($album['title']); ?></h3>
				    	</div>
			    	</a>
			    </div>
			<?php } ?>
		</div>
		    
	</div> <!-- Ending container-->
</section>
<?php } ?>
<!-- popular singer Section -->
<section>
	<div class="container my-5">
		<h1>Popular Singer</h1>
		<div class="owl-carousel singer">
		    <div class="item mx-3">
		    	<a href="#">
			    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
			    		<img src="images/singers/Rahat_Fateh_Ali_Khan.png">
			    		<h3 class="text-primary">Rahat Fateh</h3>
			    	</div>
		    	</a>
		    </div>
		    <div class="item mx-3">
		    	<a href="#">
			    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
			    		<img src="images/singers/armaan-malick.jpg">
			    		<h3 class="text-primary">Arman Malick</h3>
			    	</div>
		    	</a>
		    </div>
		    <div class="item mx-3">
		    	<a href="#">
			    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
			    		<img src="images/singers/atif-aslam.jpg">
			    		<h3 class="text-primary">Atif Aslam</h3>
			    	</div>
		    	</a>
		    </div>
		    <div class="item mx-3">
		    	<a href="#">
			    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
			    		<img src="images/singers/arijit-singh.jpg">
			    		<h3 class="text-primary">Arijit Singh</h3>
			    	</div>
		    	</a>
		    </div>
		    <div class="item mx-3">
		    	<a href="#">
			    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded">
			    		<img src="images/singers/justin-bieber.jpg">
			    		<h3 class="text-primary">Justin bieber</h3>
			    	</div>
		    	</a>
		    </div>
	</div> <!-- Ending container-->
</section>

<?php if (!empty($subCategories)) { ?>
<!-- discover music Section -->
<section>
	<div class="container my-5">
		<h1>Discover Music</h1>
		<div class="owl-carousel discover-music">
			<?php foreach($subCategories as $subCategory) { ?>
			    <div class="item mx-3">
			    	<a href="./songlist.php?subcategory=<?php echo $subCategory['id']; ?>">
				    	<div class="d-flex flex-column justify-content-center align-items-center border border-secondary rounded" style="height: 150px">
				    		<img src="<?php echo $subCategory['image']; ?>">
				    		<h3 class="text-primary"><?php echo $subCategory['title']; ?></h3>
				    	</div>
			    	</a>
			    </div>
			<?php } ?>
		</div>
	</div> <!-- Ending container-->
</section>
<?php } ?>
<?php require('layout/footer.php'); ?>