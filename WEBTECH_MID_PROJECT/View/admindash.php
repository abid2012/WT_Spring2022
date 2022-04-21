<?php

session_start();
if(!isset($_SESSION["username"]))
{
    header("location: ./adminlogin.php");
}

/*
if(isset($_SESSION['username']))
{
    
}
*/
?>

<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>
        <?php
         //echo ucfirst($_SESSION["username"]);
         /*
         if(isset($_COOKIE["back"]))
         {
             echo $_COOKIE["back"]." ".ucfirst($_SESSION["username"]);
         }
         */
             echo "Welcome"." ".ucfirst($_SESSION["username"]);
        ?>
    </h1>
    Want to <a href="../Control/logoutvalid.php">logout?</a> <br> <br>

    <h3>Admin Data</h3>
    <table border="1">    
             <?php   
             $data = file_get_contents("../File/admindata.json");  
             $data = json_decode($data, true);
             echo '<tr>'.'<th>'.'Name'.'</th>'.'<th>'.'Email'.'</th>'.'<th>'.'Password'.'</th>'.'<th>'.'Date Of Birth'.'</th>'.'<th>'.'Gender'.'</th>'.'<th>'.'Language'.'</th>'.'<th>'.'Country'.'</th>'.'<th>'.'Address'.'</th>'.'</tr>';
             foreach($data as $row)  
             {  
                echo '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["email"].'</td>'.'<td>'.$row["pass"].'</td>'.'<td>'.$row["dob"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.implode(",",$row["language"]).'</td>'.'<td>'.$row["country"].'</td>'.'<td>'.$row["address"].'</td>'.'</tr>';
             } 
             ?> 
    </table>

    <br>

    <h3>Delete An Admin</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email"></td>
                         <td><input type="submit" name="Submit" value="Delete"></td>
                     </tr>
                 </table>
             </form>


             <br>

    <h3>Change Password</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email2"></td>
                     </tr>
                     <tr>
                         <td>Password:</td>
                        <td><input type="password" name="pass"></td>
                         <td><input type="submit" name="Submit2" value="Change"></td>
                     </tr>
                 </table>
             </form>
</body>
</html>

<?php

include "../Control/admindashvalid.php";

?>