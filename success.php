	<?php
		session_start();
		include('conn.php');
		$userid=$_SESSION['id'];
	 
		$userq=mysqli_query($conn,"select * from `user` where userid='$userid'");
	?>
	<!doctype html>
	<html>
	<head>
		<title>Session Example</title>
	</head>
	<body>
		<h2>User Found! </h2>
		Welcome, <?php echo $userq['fullname']; ?>
	</body>
	</html>
