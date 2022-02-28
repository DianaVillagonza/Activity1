<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="login";
//check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno())
{
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
