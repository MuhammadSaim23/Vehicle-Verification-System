<?php  
session_start();

if (isset($_SESSION["uname"])) 
{
    $link= mysqli_connect("localhost:3307", "root", "", "Project");
    if ($link->connect_error) 
    {
        die("Connection failed: " . $link->connect_error);
    }

    $q= "SELECT * FROM record";
    $queryResult= $link->query($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="Style/mainstyling.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kaushan+Script&display=swap" rel="stylesheet"  />
    <style>
        .service_1
    {
        width: 100%;
        height: auto;
        font-size: 20px;
    }
    .name
    {
        margin-bottom: 70px;
    }
    .footer
    {
        margin-top: 50px;
    }
    </style>
</head>
<body>
    <div class="topnav">
      <img src="Pictures/logo.png" width="150px" height="100px">
      <div class="topnav-right">
        <a href="logout.php">Logout</a>
      </div>
    </div>

    <div class="name">
      <h1 style="color: white;"><u>Record</u></h1>
    </div>

    <div class="view">
        <?php
            echo "<table border=1 align='center'>";
    echo "<tr>";
        echo "<th><i>ID</i></th>";
        echo "<th><i>Name</i></th>";
        echo "<th><i>Father Name</i></th>";
        echo "<th><i>CNIC</i></th>";
        echo "<th><i>Mob #</i></th>";
        echo "<th><i>Vehicle Name</i></th>";
        echo "<th><i>Vehicle #</i></th>";
        echo "<th><i>Report</i></th>";
        echo "<th><i>Update</i></th>";
    echo "</tr>";
    while ($result= $queryResult->fetch_assoc())
    {
    echo "<tr>";
        echo "<td>" . $result["ID"]. "</td>";
        echo "<td>" . $result["Name"]. "</td>";
        echo "<td>" . $result["Father_name"]. "</td>";
        echo "<td>" . $result["Cnic"]. "</td>";
        echo "<td>" . $result["No"]. "</td>";
        echo "<td>" . $result["Vehicle_name"]. "</td>";
        echo "<td>" . $result["Vehicle_num"]. "</td>";
        echo "<td>" . $result["Report"]. "</td>";
        echo "<td><a href='update_1.php?ID=" . $result["ID"]. "'><button type='button' style=' background-color: gray; border-radius: 15px; width: 80px; height: 30px;'>Edit</button></a></td>";
    echo "</tr>";
    }
echo "</table>";



        ?>
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
