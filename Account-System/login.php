<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Login - Tomato Time</title>
		<link rel="icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="wrapper">
			<div class="container">
				<form class="login-form" action="login-check.php" method="post">
					<span class="form-title">Log in</span>

					<div class="form-group">
						<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
						<?php } ?>
						<label>Username</label>
						<input type="text" name="uname" class="form-control" placeholder="Enter your Username" required>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
					</div>

					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Log in">
					</div>

					<p>No account? No worries. <a href="signup.php">Register here</a>.</p>
				</form>
			</div>

			<footer class="copyright">
				&copy; 2020 All rights reserved. Tomato Time, by <a href="https://www.instagram.com/k_azor/" target="_blank"><strong>K-Azor</strong></a>
			</footer>
		</div>		
	</body>
</html>