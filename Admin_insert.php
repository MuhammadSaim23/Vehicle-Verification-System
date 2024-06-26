<?php
$link= mysqli_connect("localhost:3307", "root", "", "Project");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$user_name=$_POST["name"];
$password=$_POST["pass"];


$q="INSERT INTO Signup(username,password)VALUES('$user_name','$password')";

if($link->query($q)==TRUE)
{
	header("location:Admin_signup.html");
}
else
{
	echo "error in creating account";
}
$link->close();
?>