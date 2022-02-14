<?php
include "includes/header.php";

?>

		<div class="signup-page">
			<form class="" method="post" action="includes/login.inc.php">
				<h2 class="form-title">Login here...</h2>
			
                
                
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
					<button type="submit" name="submit" class="btn btn-big">
						Login
					</button>
					<!-- <input type="submit" name="submit" class="register" value="SignUp"> -->
				</div>
				
				<h5>Or no account...Please,?<a href="signup.php">Sign Up...</a></h5>
			</form>
		</div>






























<!-- <div class="signup-page">
    
    <form action="includes/login.inc.php" method="POST">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div> -->