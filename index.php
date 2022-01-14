

	<?php
	include 'includes/header.php';
	include 'includes/signup.inc.php';
	$firstname = $_SESSION['firstName'];
	echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	
	?>

<div class="container mt-3">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="signup.php" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="login.php" role="tab" aria-controls="pills-contact" aria-selected="false">Login</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
</div>


</body>
</html>