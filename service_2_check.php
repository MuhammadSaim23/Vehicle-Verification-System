<?php

$engine=$_POST['num'];
$Result1="" ;
$Result2="" ;

if ($engine>= 660 & $engine <= 1000) 
{
    $Result1=10000;
    $Result2=15000;
    
}
if ($engine> 1000 & $engine <=2000)
{
    $Result1=20000;
    $Result2=25000;
}
if($engine >2000)
{
    $Result1=30000;
    $Result2=35000;
}

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
    <style>
    .temp
    {
      width: 100%;
      height: 140px;
      margin-top: 50px;
      font-size: 20px;
    }
    </style>
</head>
<body>
    <div class="topnav">
      <img src="Pictures/logo.png" width="150px" height="100px">
      <div class="topnav-right">
        <a href="main.html">Home</a>
        <a href="blogs.html">Blogs</a>
        <a href="Admin_login.html">Admin Login</a>
        <a href="Contact_us.html">Contact Us</a>
      </div>
    </div>

    <div class="name">
      <h1 style="color: white;"><u>Tax Calculation</u></h1>
    </div>

    <div class="temp">
        <h2 align="center">Filter tax according to your engine size is <?php echo $Result1; ?></h2>
        <h2 align="center">Non Filter tax according to your engine size is <?php echo $Result2; ?></h2>
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