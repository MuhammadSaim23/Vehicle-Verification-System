<?php
session_start();

$link= mysqli_connect("localhost:3307", "root", "", "Project");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$number=$_POST["num"];

$q="SELECT * FROM record WHERE Vehicle_num='$number'";

$result= $link->query($q);
$row= $result->fetch_assoc();

if(is_array($row))
{
	header("location:service_1_ok.html");
}
else
{
	
	header("location:service_1_notok.html");
}

?>