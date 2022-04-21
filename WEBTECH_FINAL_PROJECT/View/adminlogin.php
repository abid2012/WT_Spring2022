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

    <link rel="stylesheet" href="../Css/adminlogin.css">
    <link rel="stylesheet" href="../Css/buttons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <form action="" method="post" class="loginform">
    <h2>Admin Login</h2>
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
            
        </table>
                    <br>
        <input type="submit" name="Submit" value="Login" id="green-btn" class="btn green-btn">
                    <a href="../index.php"><input type="button" id="blue-btn" class="btn blue-btn" value="Back To Home"></a>
                
    </form>

    <p class="txt">Don't have an account? <a href="./adminsignup.php">Sign Up</a></p>
    <script src="../Js/buttonshover.js"></script>
</body>
</html>

<?php

include "../Control/adminloginvalid.php";

if(isset($_SESSION['username']))
{
    header('location: ./admindash.php');
}



?>