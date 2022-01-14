<?php
	include "includes/header.php";
?>

<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">

			<form class="form-detail" method="post" action="includes/signup.inc.php">
				<h2>Signup to  register your blog account for free</h2>
				<div class="form-row">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" class="input-text" placeholder="Your first name please" required>
					<i class="fas fa-user"></i>
				</div>

                <div class="form-row">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="input-text" placeholder="Your surname or lastname please" required>
					<i class="fas fa-user"></i>
				</div>

                
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>

                <div class="form-row">
					<label for="password">Re-Enter Password</label>
					<input type="password" name="re-password" id="password" class="input-text" placeholder="Re-Enter Password" required>
					<i class="fas fa-lock"></i>
				</div>


				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="SignUp">
				</div>
			</form>
		</div>
	</div>
</body>
</html>