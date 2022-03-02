<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>SIGN IN</title>
<style>
* {
    font-family: Century Gothic, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: url(https://i.ibb.co/xqpypMx/back.png);
    background-size: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
}
.title {
    color: yellow;
    font-size: 32px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 15px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.formDiv {
    position: absolute;
    top: 100px;
}
.formDiv a {
    display: block;
    width: 100%;
    text-align: center;
    color: \lightblue;
    margin-top: 8px;
    text-decoration: none;
    letter-spacing: 1px;
    transition: 0.3s;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.formDiv a:hover {
    color: skyblue;
}
.input-group {
    max-width: 350px;
    width: 100%;
    background: #f0f0f0;
    margin: 10px 0;
    height: 50px;
    border-radius: 59px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.input-group i {
    text-align: center;
    line-height: 50px;
    color: #acacac;
    transition: 0.5s;
    font-size: 15px;
}
.input-group input {
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 500;
    font-size: 14px;
    color: #333;
    transition: 0.3s;
}
.btn {
    width: 100%;
    height: 45px;
    max-width: 350px;
    background: #fff;
    border: 2px solid #fff;
    border-radius: 25px;
    color: darkcyan;
    cursor: pointer;
    font-weight: 500;
    transition: 0.3s;
    margin-top: 10px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.btn i {
    font-size: 12px;
    margin-left: 4px;
}
.btn:hover {
    background: none;
    color: lightcyan;
}

@keyframes onloadAnim {
    from {
        transform: translateY(-88%);
    }
    to {
        transform: translateY(0);
    }
}


/* Responsivity */

@media only screen and (max-width: 990px) {
    body {
        background-size: 130%;
    }
}
@media only screen and (max-width: 740px) {
    body {
        background-size: 175%;
    }
}
@media only screen and (max-width: 555px) {
    body {
        background-size: 245%;
    }
}
@media only screen and (max-width: 420px) {
    body {
        background-size: 265%;
    }
}
@media only screen and (max-width: 380px) {
    body {
        background-size: 320%;
    }
}
</style>
</head>
<body>
<?php
    require('Function/Connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) 
	{
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($connect, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) 
		{
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: Dashboard.php");
        } else 
		{
            echo "<script>alert('INCORRECT USERNAME OR PASSWORD')</script>";
			echo "<script>window.open('SignIn.php','_Self')</script>";
        }
    }
?>
<div class="formDiv">
<h1 class="title">SIGN IN</h1>
    <form class="form" method="post" name="login">
		<div class="input-group">
		<i class="fas fa-user"></i>
        <input type="text" class="login-input" name="username" placeholder="USERNAME" autofocus="true" required/>
		</div>
		<div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" class="login-input" name="password" placeholder="PASSWORD" required/>
		</div>
        <input type="submit" value="SIGN IN" name="submit" class="btn"/>
		<a href="SignUp.php"/>SIGN UP</p>
  </form>
</div>
<script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
</body>
</html>