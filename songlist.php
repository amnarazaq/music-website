<?php
require('layout/header.php');
?>

<!-- Category Section -->
<section>
	<div class="container">
		<div class="d-flex mb-5 mt-3">
			<div class="w-25">
				<img class="img-fluid" src="images/categories/bollywood.jpg">
			</div>
			<div class="d-flex flex-column mx-4">
				<h3 "text-primary">Bollywood Songs</h3>
				<p>Hindi  | songs no.</p>
			</div>
		</div>
		<div class="my-5 d-flex flex-column align-items-start">
			<h3>Songs List</h3>
			<div class="table-responsive col-10">
				<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Player</th>
			      <th scope="col">Download</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Tere Mast Mast do nain</td>
			      <td>
			      	<audio controls>
					  <source src="horse.ogg" type="audio/ogg">
					  <source src="horse.mp3" type="audio/mpeg">
					</audio>
				  </td>
			      <td><a href="#" class="text-secondary"><i class="fa fa-download fa-lg" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Hue bechain</td>
			     <td>
			      	<audio controls>
					  <source src="horse.ogg" type="audio/ogg">
					  <source src="horse.mp3" type="audio/mpeg">
					</audio>
				  </td>
			      <td><a href="#" class="text-secondary"><i class="fa fa-download fa-lg" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>tera happy birthday</td>
			    <td>
			      	<audio controls>
					  <source src="horse.ogg" type="audio/ogg">
					  <source src="horse.mp3" type="audio/mpeg">
					</audio>
				  </td>
			      <td><a href="#" class="text-secondary"><i class="fa fa-download fa-lg" aria-hidden="true"></i></a></td>
			    </tr>
			  </tbody>
			</table>
			</div>
		</div>
	</div>
</section>

<?php require('layout/footer.php'); ?>