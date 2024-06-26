<?php
session_start();
?>

<html>
<head>
<?php
$link= mysqli_connect("localhost:3307", "root", "", "Project");

// Check connection
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

if(isset($_SESSION["uname"]))
{
$id=$_GET["ID"];
$q="SELECT * FROM record where ID ='$id'";
$queryresult= $link->query($q);
$result= $queryresult->fetch_assoc();
?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/mainstyling.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kaushan+Script&display=swap" rel="stylesheet"  />
<title>Update</title>
<head>
<body>
    <div class="topnav">
      <img src="Pictures/logo.png" width="150px" height="100px">
      <div class="topnav-right">
        <a href="logout.php">Logout</a>
      </div>
    </div>

    <div class="name">
      <h1 style="color: white;"><u>Registration Form</u></h1>
    </div>

    <div class="registration">
        <form action="update_2.php" method="post">
              <table align="center">
                <tr>
                    <th>Owner Name : </th>
                    <td colspan="2"><input type="text" name="name" value="<?php echo $result["Name"] ?>" required></td>
                </tr>
                <tr>
                    <th>Father Name : </th>
                    <td colspan="2"><input type="text" name="fname" value="<?php echo $result["Father_name"] ?>" required></td>
                </tr>
                <tr>
                    <th>CNIC : </th>
                    <td colspan="2"><input type="text" name="nic" value="<?php echo $result["Cnic"] ?>" required></td>
                </tr>
                <tr>
                    <th>Mob # : </th>
                    <td colspan="2"><input type="text" name="num" value="<?php echo $result["No"] ?>" required></td>
                </tr>
                <tr>
                    <th>Vehicle Name : </th>
                    <td colspan="2"><input type="text" name="v_name" value="<?php echo $result["Vehicle_name"] ?>" required></td>
                </tr>
                <tr>
                    <th>Vehicle No : </th>
                    <td colspan="2"><input type="text" name="v_num" value="<?php echo $result["Vehicle_num"] ?>" required></td>
                </tr>
                <tr>
                    <th>Police Report : </th>
                    <td><input type="radio" name="r1" value="Yes">Yes</td>
                    <td><input type="radio" name="r1" value="No">No</td>
                </tr>
                <tr>
                    <th colspan="3">
                        <input type="submit" value="Update" style="border-radius: 15px; background-color: gray; float: right; height: 30px; width: 70px;">
                    </th>
                </tr>
                <input type="hidden" name="id" value="<?php echo $result["ID"] ?>"> 
            </table>
        </form>
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

</body>
</html>