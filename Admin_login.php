<?php
session_start();

$link= mysqli_connect("localhost:3307", "root", "", "Project");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$user_name=$_POST["name"];
$password= $_POST["pass"];

$q="SELECT * FROM signup WHERE username='$user_name' and password='$password'";

$result= $link->query($q);
$row= $result->fetch_assoc();

if(is_array($row))
{
	$_SESSION["id"]= $row["ID"];
	$_SESSION["uname"]=$row["username"];
	header("location:Admin_home.php");
}
else
{
	header("location:wrong_login.html");
}

?>