<?php  
session_start();

if (isset($_SESSION["uname"])) 
{
    $link= mysqli_connect("localhost:3307", "root", "", "Project");
    if ($link->connect_error) 
    {
        die("Connection failed: " . $link->connect_error);
    }    
$id=$_GET["id"];

$q= "delete from record where id='$id'";
if($link->query($q) == TRUE)
	echo header("location:delete.php");

else
	echo $link->error;


$link->close();
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="Style/mainstyling.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kaushan+Script&display=swap" rel="stylesheet"  />
</head>
<body>
    <div class="topnav">
      <img src="Pictures/logo.png" width="150px" height="100px">
      <div class="topnav-right">
      </div>
    </div>

    <div class="name">
      <h1 style="color: white;"><u>Security Risks</u></h1>
    </div>

    <div class="service_1">
        <h1 align="center">Login Must Required !</h1>
    </div>
    <div class="footer">
      <div class="footer1">
        <h2 style="color:white;"><u>N&M Projects</u></h2>
        <h3 style="color:white;">The Projects&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pricing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</h3>
        <p style="color:white;">Web Creater&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N&M Pro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apps & pluggins</p>
        <p style="color:white;">Icons Creater&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teams&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Icon API</p>
        <p style="color:white;">Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N&Mji</p>

      </div>
            <div class="footer2"><img src="Pictures/f1.jpg"><br><img src="Pictures/f2.jpg"></div>
    </div>
</body>
</html>
<?php	
}
?>