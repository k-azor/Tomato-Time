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
                    <form class="login-form" action="signup-check.php" method="post">
                         <span class="form-title">Sign up</span>
                         
                         <?php if (isset($_GET['error'])) { ?>
                              <p class="error"><?php echo $_GET['error']; ?></p>
                         <?php } ?>

                         <?php if (isset($_GET['success'])) { ?>
                              <p class="success"><?php echo $_GET['success']; ?></p>
                         <?php } ?>

                         <div class="form-group">
                              <label>Name</label>
                              <?php if (isset($_GET['name'])) { ?>
                                   <input type="text" 
                                        name="name" class="form-control" placeholder="What do we call you?"                            value="<?php echo $_GET['name']; ?>">
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="name" 
                                        placeholder="What do we call you?" class="form-control">
                              <?php }?>
                         </div>

                         <div class="form-group">
                              <label>Username</label>
                              <?php if (isset($_GET['uname'])) { ?>
                                   <input type="text" 
                                        name="uname" class="form-control"
                                        placeholder="Choose a username"
                                        value="<?php echo $_GET['uname']; ?>">
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="uname" class="form-control"
                                        placeholder="Choose a username">
                              <?php }?>
                         </div>

                         <div class="form-group">
                              <label>Password</label>
                              <input type="password" 
                                   name="password" class="form-control"
                                   placeholder="Enter your Password">

                              <label>Confirm Password</label>
                              <input type="password" 
                                   name="re_password" class="form-control"
                                   placeholder="Confirm your Password">
                         </div>

                         <div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Sign up">
					</div>

                         <p>Already have an accont? <a href="login.php">Let's get you back in</a>.</p>
                    </form>
               </div>

               <footer class="copyright">
				&copy; 2020 All rights reserved. Tomato Time, by <a href="https://www.instagram.com/k_azor/" target="_blank"><strong>K-Azor</strong></a>
			</footer>
          </div>
     </body>
</html>