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
    <link rel='icon' href='./images/favicon.png'>
    <title>Change Password</title>
</head>

  
   
   




<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
	
	   
</fieldset>
    <table border="1px solid black" width='70%'>
        <tr>
            <td>
                <label>Menu</label>
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
            <td>
	
	
        <form action='../controller/changepasschk.php' method="POST">
            <fieldset>
                <legend>
                    <b>Change Password</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Current Password:</td>
                        <td><input type='password' name='op' required/></td>
                    </tr>
                    <tr>
                        <td align="right">New Password:</td>
                        <td><input type='password' name='np' required/></td>
                    </tr>
                    <tr>
                        <td align="right">Retype New Password:</td>
                        <td><input type='password' name='cnp' required/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
		
		
		
            </td>
        </tr>
    </table>

    </div>
    <?php include('./footer.php'); ?>
</body>
</html>