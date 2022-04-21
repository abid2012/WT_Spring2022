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
$username=$email=$pass=$dob=$gender=$languages=$country=$address="";
$username2=$email2=$pass2=$phone=$dob2=$gender2=$languages2=$country2=$address2="";
?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Css/admindash.css">
    <link rel="stylesheet" href="../Css/buttons.css">
</head>
<body>

    <!-- Want to <a href="../Control/logoutvalid.php">logout?</a> <br> <br> -->


    <!-- <div class="col left">
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
    </h1> <br>

        <button id="ma">Manage Admin</button> <br> <br>
        <button id="mu" type="submit" onclick="replace1()">Manage User</button> <br> <br>
        <a href="#"><button>Manage Booking Manager</button></a> <br> <br>
        <a href="#"><button>Manage Package Manager</button></a> <br> <br>
        <a href="../Control/logoutvalid.php"><button>Logout</button></a>
    </div> -->

    <div class="topdiv">
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
    </h1> <br>
    Want to <a href="../Control/logoutvalid.php" class="logout">logout?</a>
    </div> 
    

    <!-- Admin starts -->


    <div id="admin" class="col right divadmin">
         <h1>Admin</h1> <br>

         <form action="" method="post">
            <input type="submit" name="ViewAdminData" value="View Admin Data" class="btn blue-btn">
        </form>

        <?php
            include "../Control/admindashvalid.php";
        ?>

        <br>

        <form action="" method="post">
            <input type="text" name="Searchfield" class="searchbyusername" id="searchfield" placeholder="Search By Username" onkeyup="searchdata()">
            <input type="submit" name="Searchbtn" value="Search" class="btn blue-btn">
        </form> <br>
        <p id="show"></p> <br>

       <div class="col left2">
        <h3>Searched Data</h3>
        <form action="" method="post">

        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="pass" value="<?php echo $pass; ?>"></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="text" name="dob" value="<?php echo $dob; ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td><input type="text" name="languages" value="<?php echo $languages; ?>"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="country" value="<?php echo $country; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" cols="21" rows="5"><?php echo $address; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Update" value="Update" class="btn green-btn"></td>
            </tr>
        </table>
        
        </form>
        
        </div>
       
         <div class="col right2">
        <h3>Insert Admin</h3>
        <form action="" method="post">
            <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="e"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="p"></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="d" max="2003-03-01"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="g" value="Male">Male
                    <input type="radio" name="g" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" name="l[]" value="English">English 
                <input type="checkbox" name="l[]" value="Bangla">Bangla
                <input type="checkbox" name="l[]" value="Hindi">Hindi
                </td>
            </tr>

            <tr>
                <td>Country: </td>
                <td>
                    <select name="c">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="United States">United States</option>
                        <option value="Australia">Australia</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Address: </td>
                <td>
                    <textarea name="ad" cols="21" rows="5"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Insert" value="Insert" class="btn green-btn">
            </td>
            </tr>
            </table>
        </form>
        </div>
        
   
        <div class="col right">
        <h3>Delete Admin</h3>
        <form action="" method="post">
            <table>
                <td><input type="text" class="searchbyusername" placeholder="Delete By Username" name="Deletefield"></td>
                <td><input type="submit" name="Delete" value="Delete" class="btn red-btn"></td>
            </table>
        </form>
        </div>
        
         <!-- Admin ends -->


        <!-- User starts -->


        <div id="user" class="col right divadmin">
        <h1>User</h1> <br>

         <form action="" method="post">
            <input type="submit" name="ViewUserData" value="View User Data" class="btn blue-btn">
        </form>

        <?php
            //include "../Control/admindashvalid.php";
            include "../Control/admindashvalid2.php";
        ?>

        <br>

        <form action="" method="post">
            <input type="text" name="Searchfield2" class="searchbyusername" id="searchfield" placeholder="Search By Username" onkeyup="searchdata()">
            <input type="submit" name="Searchbtn2" value="Search" class="btn blue-btn">
        </form> <br>
        <p id="show"></p> <br>



        <div class="col left2">
        <h3>Searched Data</h3>
        <form action="" method="post">

        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username2" value="<?php echo $username2; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email2" value="<?php echo $email2; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="pass2" value="<?php echo $pass2; ?>"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="text" name="dob2" value="<?php echo $dob2; ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="text" name="gender2" value="<?php echo $gender2; ?>"></td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td><input type="text" name="languages2" value="<?php echo $languages2; ?>"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="country2" value="<?php echo $country2; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address2" cols="21" rows="5"><?php echo $address2; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Update2" value="Update" class="btn green-btn"></td>
            </tr>
        </table>
        
        </form>
        
        </div>


        <div class="col right2">
        <h3>Insert User</h3>
        <form action="" method="post">
            <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user2"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="e2"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="p2"></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="ph"></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="d2" max="2003-03-01"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="g2" value="Male">Male
                    <input type="radio" name="g2" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" name="l2[]" value="English">English 
                <input type="checkbox" name="l2[]" value="Bangla">Bangla
                <input type="checkbox" name="l2[]" value="Hindi">Hindi
                </td>
            </tr>

            <tr>
                <td>Country: </td>
                <td>
                    <select name="c2">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="United States">United States</option>
                        <option value="Australia">Australia</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Address: </td>
                <td>
                    <textarea name="ad2" cols="21" rows="5"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Insert2" value="Insert" class="btn green-btn">
            </td>
            </tr>
            </table>
        </form>
        </div>


        <div class="col right">
        <h3>Delete User</h3>
        <form action="" method="post">
            <table>
                <td><input type="text" class="searchbyusername" placeholder="Delete By Username" name="Deletefield2"></td>
                <td><input type="submit" name="Delete2" value="Delete" class="btn red-btn"></td>
            </table>
        </form>
        </div>


        </div>



        <script src="../Js/admindashauto.js"></script>

</body>
</html>

