

	<?php
	include 'includes/header.php';
	include 'includes/signup.inc.php';
	$firstname = $_SESSION['firstName'];
	echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	
	?>




</body>
</html>