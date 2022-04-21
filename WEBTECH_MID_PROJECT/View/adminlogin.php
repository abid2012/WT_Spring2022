<?php

/*
$cookie_name='back';
$cookie_val='Welcome Back';
setcookie($cookie_name,$cookie_val,time()+10,"/");
*/

?>

<html>
<head>
    <title>Admin Login</title>
    <!-- <script language="javascript" type="text/javascript">
        window.history.forward()
    </script>  -->
</head>
<body>
    <h2>Admin Login</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php 
                    if(isset($_COOKIE["username"]))
                    {
                        echo $_COOKIE["username"];
                    }

                ?>"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" value="<?php 
                    if(isset($_COOKIE["pass"]))
                    {
                        echo $_COOKIE["pass"];
                    }

                ?>"></td>
                <td><input type="checkbox" name="remember">Remember Me</td>
            </tr>
        </table>
        <br>
        <td><input type="submit" name="Submit" value="Login">
                    <a href="../index.php"><input type="button" value="Back To Home"></a>
                </td>
    </form>
    Don't have an account? <a href="./adminsignup.php">Sign Up</a>
</body>
</html>

<?php

include "../Control/adminloginvalid.php";

if(isset($_SESSION['username']))
{
    header('location: ./admindash.php');
}



?>