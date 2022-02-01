<?php
	include 'includes/header.php';
	include 'includes/signup.inc.php';
	include "classes/post.classes.php";
    $fetchPost = new Post();
    $post = $fetchPost->getPost();

		// $firstname = $_SESSION["email"];
		// echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
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
						<li><a href="#">Politics</a></li>
					</ul>
				</div>
			</div>
	</div>
	<!-- content end -->

</div>

<!-- footer -->
<div class="footer">
	<div class="footer-content">
		<div class="footer-section section"></div>
		<div class="footer-section contact-form"></div>
	</div>

	<div class="footer-bottom">
		&copy; ajayisikiru.com | Designed by Dhikrullah
	</div>
</div>


</body>
</html>