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
    <link rel='icon' href='../images/icon.png'>
    <title>Log In</title>
</head>
<body>
    <?php include('./header.php'); ?>

    <fieldset>
    <table align="right">
    <tr>
        <td>
            <nav>
                <a href="./index.php">Home</a> ||
                <a href="./login.php">Log in</a> ||
                <a href="./registration.php">Registration</a>
            </nav>
        </td>
    </tr>        
    </table>
    </fieldset>

    <div width='100px'>
        <form action='../controller/forgotpasschk.php' method="POST">
            <fieldset>
                <legend>
                    <b>FORGOT PASSWORD</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Enter Email:</td>
                        <td><input type='text' name='email'/></td>
                    </tr>
            
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="left"><input type='submit' value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>