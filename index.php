<?php
	include 'includes/header.php';
	
?>

<div class="container">
	<?php
		include 'includes/signup.inc.php';
		$firstname = $_SESSION['firstName'];
		echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	?>

	<div class="jumbotron">
	<h1 class="display-5">Top-rated blog title goes here...</h1>
	<p class="lead">Body goes here...</p>
	<hr class="my-4">
	<p>Author: Dhikr</p>
	<p>Created at: Nurudeen</p>
	<p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</p>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="card border-success mb-3">
			<div class="card-body">
				<h5 class="card-title">Special topics</h5>
				<p class="card-text">Body goes in here...</p>
				<a href="#" class="btn btn-primary">Click to read more...</a>
			</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="card border-danger">
			<div class="card-body">
				<h5 class="card-title">Title also goes here...</h5>
				<p class="card-text">Body goes here...</p>
				<a href="#" class="btn btn-primary">Click to read more</a>
			</div>
			</div>
		</div>
</div>



<?php
	include 'includes/footer.php';
?>


</div>


</body>
</html>