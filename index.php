<?php
	include 'includes/header.php';
	include "classes/post.classes.php";
    $fetchPost = new Post();
    $post = $fetchPost->getPost();
?>
	<?php
		include 'includes/signup.inc.php';
		$firstname = $_SESSION['firstName'];
		echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	?>

<!-- page wrapper -->
<!-- carousel -->

<div class="page-wrapper">
  <!-- post slider -->
  <div class="post-slider">
    <h1 class="slider-title">Featured Posts</h1>
		<!-- added previous and next -->
    <i class="fas fa-chevron-left prev"></i>
	<i class="fas fa-chevron-right next"></i>

	

    <div class="post-wrapper">
		<div class="post">
			<img src="images\fdff.jpg" alt="Solat" class="slider-image">
			<div class="post-info">
				<h4><a href="#">May Allah ease my affairs, ameen</a></h4> <br>
				<i class="fas fa-user">Dhikrullah</i>
					&nbsp;
				<i class="fas fa-calendar">May 22, 2020</i>
			</div>
		</div>

		<!-- 2 -->
		<div class="post">
			<img src="images\fdff.jpg" alt="Solat" class="slider-image">
			<div class="post-info">
				<h4><a href="#">May Allah ease my affairs, ameen</a></h4> <br>
				<i class="fas fa-user">Dhikrullah</i>
					&nbsp;
				<i class="fas fa-calendar">May 22, 2020</i>
			</div>
		</div>

		<!-- 3 -->
		<div class="post">
			<img src="images\fdff.jpg" alt="Solat" class="slider-image">
			<div class="post-info">
				<h4><a href="#">May Allah ease my affairs, ameen</a></h4> <br>
				<i class="fas fa-user">Dhikrullah</i>
					&nbsp;
				<i class="fas fa-calendar">May 22, 2020</i>
			</div>
		</div>

		<!-- 4 -->
		<div class="post">
			<img src="images\fdff.jpg" alt="Solat" class="slider-image">
			<div class="post-info">
				<h4><a href="#">May Allah ease my affairs, ameen</a></h4> <br>
				<i class="fas fa-user">Dhikrullah</i>
					&nbsp;
				<i class="fas fa-calendar">May 22, 2020</i>
			</div>
		</div>

  	</div>
</div>
<!-- carousel ends -->


<div class="container">


	<div class="jumbotron">
<?php
	// var_dump($post[0]['title']);exit();
	// foreach ($post as $eachPost){?>
		<?php 
		echo "<center><h1 class='display-5'> " . $post[0]['title'] . "</h1>" .
	// }
	// fetch post body here
	"<center><p class='lead'>" . $post[0]['body'] . "</p>" . 

	"<center><p><b> Created at:</b>" . $post[0]['created_at'] . "</p></center>"
	// fetch the date the post was created
?>

	<hr class="my-4">
	<center><p>Author: Dhikr</p>
	<!-- <p>Created at: 00:01:2020</p> -->
	<p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</p></center>
	</div>
	
		<div class='row'>
		<?php foreach($post as $eachRow){ 
		?>
			<?php echo 
			// var_dump($eachRow);exit();

				"<div class='col-sm-6'>
					<div class='card border-success'>
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