<?php
$link= mysqli_connect("localhost:3307", "root", "", "Project");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$name=$_POST["name"];
$Email=$_POST["email"];
$no=$_POST["num"];
$message=$_POST["mess"];


$q="INSERT INTO contact_us(Name,Email,No,Message)VALUES('$name','$Email','$no','$message')";

if($link->query($q)==TRUE)
{
	header("location:contactus_response.html");
}
else
{

	echo "error in creating account";
}
$link->close();
?>