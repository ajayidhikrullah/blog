<?php
	include 'includes/header.php';
	include "classes/post.classes.php";
    $fetchPost = new Post();
    $post = $fetchPost->getPost();
?>

<div class="container">
	<?php
		include 'includes/signup.inc.php';
		$firstname = $_SESSION['firstName'];
		echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	?>

	<div class="jumbotron">
<?php
	// var_dump($post[0]['title']);exit();
	// foreach ($post as $eachPost){?>
		<?php 
		echo "<h1 class='display-5'> " . $post[0]['title'] . "</h1>" .
	// }
	// fetch post body here
	"<p class='lead'>" . $post[0]['body'] . "</p>" . 

	"<p><b> Created at:</b>" . $post[0]['created_at'] . "</p>"
	// fetch the date the post was created
?>

	<hr class="my-4">
	<p>Author: Dhikr</p>
	<!-- <p>Created at: 00:01:2020</p> -->
	<p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</p>
	</div>
	<!-- echo "
		<div class='row'>
			<div class='col-sm-6'>
				<div class='card border-success mb-3'>
				<div class='card-body'>
					<h5 class='card-title'>" . $post[1]['title'] . "</h5>
					<p class='card-text'>" . $post[1]['body'] . "</p>
					<a href='#' class='btn btn-primary'> Click to read more...</a>
				</div>
				</div>
			</div>"; -->
	

		<?php foreach($post as $eachRow){ 
		?>
			<?php echo 
			// var_dump($eachRow);exit();

				"<div class='col-sm-6'>
					<div class='card border-danger'>
					<div class='card-body'>
						<h5 class='card-title'>". $eachRow['title'] ."</h5>
						<p class='card-text'>" . $eachRow['body'] . "</p>
						<a href='#' class='btn btn-primary'>Click to read more</a>
					</div>
					</div>
				</div>";?>
			<?php
				};
			?>
</div>



<?php
	include 'includes/footer.php';
?>


</div>


</body>
</html>