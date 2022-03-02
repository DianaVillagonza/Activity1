	<?php session_start(); ?>
	 
	<!DOCTYPE html>
	<html>
	<head>
		<title>Session Example</title>
		<style>
body {background-color: powderblue;}
.A{
height: 250px;
	width: 500px;
	padding: 10px 20px;
	border-radius: 0px;
	position: relative;
	left: 450px;
	bottom: -150px;
	background-color: cornflowerblue;
}

.AB{
	width: 360px;
	height: 20px;
	left: 0px;
	top: 10px;
}
.AC{
	width: 130px;
	height: 30px;
	padding: 5px;
	background-color: lightskyblue;
	border-radius: 5px;
	position: relative;
	left: 200px;
	top: 80px;
}


.AD{
	width: 50px;
	height: 50px;
	position: relative;
	bottom: -10px;
}

</style>
	</head>
	<body>
		<h2>Login Form</h2>
		<form method="POST" action="login.php">
			<img src="C:\Users\Rosalinda Padel\Desktop\ACTIVITY_1\log2.png" class="AD">
			<label>Username:</label> <input type="text" name="username" class="AB"><br><br>
			<img src="C:\Users\Rosalinda Padel\Desktop\ACTIVITY_1\pass2.png" class="AD">
			<label>Password:</label> <input type="password" name="password" class="AB"><br><br>
			<input type="submit" name="submit" class="AC">
		</form>
		<br>
		<?php
	 
			if (isset($_SESSION['message'])){
				echo $_SESSION['message'];
			}
			unset($_SESSION['message']);
		?>
	</body>
	</html>
