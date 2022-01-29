<?php
	include 'includes/header.php';
	include 'includes/signup.inc.php';
	include "classes/post.classes.php";
    $fetchPost = new Post();
    $post = $fetchPost->getPost();

		$firstname = $_SESSION["email"];
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
					<h4><a href="#">Project manager</a></h4> <br>
					<i class="fas fa-user">Dhikrullah</i>
						&nbsp;
					<i class="fas fa-calendar">May 22, 2020</i>
				</div>
			</div>

			<!-- 2 -->
			<div class="post">
				<img src="images\fdff.jpg" alt="Solat" class="slider-image">
				<div class="post-info">
					<h4><a href="#">Audit and Security</a></h4> <br>
					<i class="fas fa-user">Abdullah</i>
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
					<h4><a href="#">Oursourcing and Amalgamation</a></h4> <br>
					<i class="far fa-user">Dhikr</i>
						&nbsp;
					<i class="far fa-calendar">May 22, 2020</i>
				</div>
			</div>
		</div>
  	</div>

	<!-- carousel ends -->


	<!-- Body contents -->
	<div class="content clearfix">
		<div class="main-content">
			<h2 class="recent-post-title">Business | Most Recent Post</h2>

			<div class="post">
				<img src="images/fdff.jpg" class="post-image" alt="">
					<div class="post-preview">
						<h1><a href="#">Management Infor sys | The Post in the image</a></h1>
						<i class="fa fa-user">Nurudeen</i>
						&nbsp;
						<i class="fa fa-calendar">22 Jan, 2022</i>
						<p class="preview-text">MBIT is Just another preview text in the post image</p>
						<a href="#" class="btn read-more">Read More</a>
					</div>
			</div>			
		</div>

			<div class="sidebar">
				<div class="section search">
					<h2 class="section-title">Search here please</h2>
					<form action="index.html" method="POST">
						<input type="text" name="search-term" class="text-input" placeholder="search ooo...">
					</form>
				</div>

				<div class="section topics">
					<h2 class="section-title">Subject</h2>
					<ul>
						<li><a href="#">Poems</a></li>
						<li><a href="#">Quotes</a></li>
						<li><a href="#">Business</a></li>

					</ul>
				</div>
			</div>
	</div>
	<!-- content end -->

</div>

<!-- OLD -->
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