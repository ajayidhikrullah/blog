<?php
	include "includes/header.php";
?>

		<div class="signup-page">
			<form class="" method="post" action="includes/signup.inc.php">

		<div class="success-msg  ">
			<li>email already used</li>
		</div>
				<h2 class="form-title">Signup here...</h2>
				<div class="form-item">
				<i class="fas fa-user"></i>
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" class="text-input" placeholder="Your first name please" required>
				</div>

                <div class="form-item">
				<i class="fas fa-user"></i>
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="text-input" placeholder="Your surname or lastname please" required>
				</div>

                
				<div class="form-item">
				<i class="fas fa-envelope"></i>

					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="your-email" class="text-input" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>

				<div class="form-item">
				<i class="fas fa-lock"></i>
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="text-input" placeholder="Your Password" required>
				</div>

                <div class="form-item">
				<i class="fas fa-lock"></i>
					<label for="password">Re-Enter Password</label>
					<input type="password" name="re-password" id="password" class="text-input" placeholder="Re-Enter Password" required>
				</div>


				<div class="form-item">
					<button type="submit" name="submit" class="btn btn-big">
						SignUp
					</button>
					<!-- <input type="submit" name="submit" class="register" value="SignUp"> -->
				</div>

				<h5>Or <a href="login.php">Log In...</a></h5>
			</form>
		</div>
