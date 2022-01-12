<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php

	include 'includes/signup.inc.php';
	$firstname = $_SESSION['firstName'];
	echo "<p style='color:Green;'> Welcome, you have successfully registedred to our blog post @ <b>" . $firstname . "</b> </p>";
	
	?>

</body>
</html>