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
				<!-- <img src="images\fdff.jpg" alt="Solat" class="slider-image"> -->
				<div class="post-info">
					<h4><a href="#">Project manager</a></h4> <br>
					<i class="fas fa-user">Dhikrullah</i>
						&nbsp;
					<i class="fas fa-calendar">May 22, 2020</i>
				</div>
			</div>

			<!-- 2 -->
			<div class="post">
				<div class="post-info">
					<h4><a href="#">Audit and Security</a></h4> <br>
					<i class="fas fa-user">Abdullah</i>
						&nbsp;
					<i class="fas fa-calendar">May 22, 2020</i>
				</div>
			</div>

			<!-- 3 -->
			<div class="post">
				<div class="post-info">
					<h4><a href="#">May Allah ease my affairs, ameen</a></h4> <br>
					<i class="fas fa-user">Dhikrullah</i>
						&nbsp;
					<i class="fas fa-calendar">May 22, 2020</i>
				</div>
			</div>

			<!-- 4 -->
			<div class="post">
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
		<div class="main-content single">
            <h1 class="post-title">Another new headline post</h1>
            <!-- -->
			<button class="btn read-more">Comment</button>

        </div>
			<div class="sidebar single">
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
        <!-- </div> -->
	</div>
	<!-- content end -->

</div>
</body>
</html>



























<!-- <div class="container">
    <form action="includes/post.inc.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Post Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="My Blog title...">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Create</button>
    </form>
</div> -->

<?php
    include "includes/footer.php";
?>