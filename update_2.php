<?php
session_start();

if(isset($_SESSION["uname"]))
{
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
$id=$_POST["id"];

$q= "UPDATE record SET Name='$name', Father_name='$fname', Cnic='$cnic', No='$no',Vehicle_name='$vname',Vehicle_num='$vnum',Report='$report' WHERE ID='$id'";

if($link->query($q)==TRUE)
	//echo "Id = ".$id." Name = ".$name;
	header ("location:update.php");
else
	echo $link->error;
}
else
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error</title>
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <h1 align="center" style="color: palegreen;"><u>Sorry ! Login must required
    </body>
</html>
<?php	
}
?>