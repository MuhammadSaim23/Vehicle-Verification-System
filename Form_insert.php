<?php
$link= mysqli_connect("localhost:3307", "root", "", "Project");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$name=$_POST["name"];
$fname=$_POST["fname"];
$cnic=$_POST["nic"];
$no=$_POST["num"];
$vname=$_POST["v_name"];
$vnum=$_POST["v_num"];
$report=$_POST["r1"];


$q="INSERT INTO record(Name,Father_name,Cnic,No,Vehicle_name,Vehicle_num,Report)VALUES('$name','$fname','$cnic','$no','$vname','$vnum','$report')";

if($link->query($q)==TRUE)
{
	header("location:Admin_home.php");
}
else
{
	echo "error in creating account";
}
$link->close();
?>