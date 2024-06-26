<?php  
session_start();

if (isset($_SESSION["uname"])) 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Style/mainstyling.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kaushan+Script&display=swap" rel="stylesheet"  />
</head>
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
        <form action="Form_insert.php" method="post">
              <table align="center">
                <tr>
                    <th>Owner Name : </th>
                    <td colspan="2"><input type="text" name="name" placeholder="enter your name" required></td>
                </tr>
                <tr>
                    <th>Father Name : </th>
                    <td colspan="2"><input type="text" name="fname" placeholder="enter your father name" required></td>
                </tr>
                <tr>
                    <th>CNIC : </th>
                    <td colspan="2"><input type="text" name="nic" placeholder="XXXXX-XXXXXXX-X" required></td>
                </tr>
                <tr>
                    <th>Mob # : </th>
                    <td colspan="2"><input type="text" name="num" placeholder="XXXX-XXXXXXX" required></td>
                </tr>
                <tr>
                    <th>Vehicle Name : </th>
                    <td colspan="2"><input type="text" name="v_name" placeholder="enter your vehicle name" required></td>
                </tr>
                <tr>
                    <th>Vehicle No : </th>
                    <td colspan="2"><input type="text" name="v_num" placeholder="XXX-XX-XXXX" required></td>
                </tr>
                <tr>
                    <th>Police Report : </th>
                    <td><input type="radio" name="r1" value="Yes">Yes</td>
                    <td><input type="radio" name="r1" value="No">No</td>
                </tr>
                <tr>
                    <th colspan="3">
                        <input type="submit" value="Go" style="border-radius: 15px; background-color: gray; float: right; height: 30px; width: 70px;">
                    </th>
                </tr>
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
