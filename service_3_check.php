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
	if($row["Report"]=='No')
	{
		header("location:service_3_1.html");
	}
	else
	{
		header("location:service_3_2.html");
	}
}
else
{
	header("location:service_3_3.html");
}

?>