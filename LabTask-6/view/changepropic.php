<?php
//session_start();
if(!isset($_COOKIE["username"]))
{
	header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
            Logged in as  ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>

    <table border="1px solid black" width='100%'>
        <tr>
            <td border="1px solid black">
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./profile.php'>View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='addStudent.php'>ADD Employee</a></li>
                    <li><a href='delStudent.php'>Delete Employee</a></li>
                    <li><a href='updStudent.php'>Update Employee Info</a></li>
                    <li><a href=''>Add Product</a></li>
                    <li><a href=''>Delete Product</a></li>
                    <li><a href=''>Update Product</a></li>
                    
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <form action='../controller/uploadpropic.php' method="POST">
            <td width='70%'>
            <fieldset>
            <table align="center" border="1px solid black">
            <tr>
                <td rowspan="6" align="left">
                    <img src= '<?php echo "../images/propic.png"; ?>' height = '100'>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <input type="file" name="propic"  id="propic">
                </td>
            </tr>
            <tr>
                <td align="left">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>

            </table>
            </fieldset>
                
            </td>
        </tr>
    </table>
    </form>
    <?php include('./footer.php'); ?>    
</body>
</html>