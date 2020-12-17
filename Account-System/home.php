<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <script src="https://wordsmith.org/words/quote.js" type="text/javascript"></script>
     <a href="">Go to Home</a>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>