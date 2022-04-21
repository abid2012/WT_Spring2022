<?php
include "../Control/adminsignupvalid.php";
?>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="../Css/buttons.css">
    <link rel="stylesheet" href="../Css/admindash.css">
    <link rel="stylesheet" href="../Css/adminsignup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <div class="relative">
        <div class="absolute">


            <form action="" method="post" enctype='multipart/form-data' class="regform" onsubmit="return adminresult()">
    <h2>Admin Registration</h2> <br>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username" onkeyup="checkusername()"></td>
                <td><p class="errorp" id="usernamep"></p></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email" onkeyup="checkemail()"></td>
                <td><p class="errorp" id="emailp"></p></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" id="pass" name="pass" onkeyup="checkpass()"></td>
                <td><p class="errorp" id="passp"></p></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="dob" id="dob" max="2003-03-01" onkeyup="checkdob()"></td>
                <td><p class="errorp" id="dobp"></p></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <td><p class="errorp" id="genderp"></p></td>
                </td>
            </tr>

            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" name="language[]" value="English">English 
                <input type="checkbox" name="language[]" value="Bangla">Bangla
                <input type="checkbox" name="language[]" value="Hindi">Hindi
                </td>
            </tr>

            <tr>
                <td>Country: </td>
                <td>
                    <select name="country">
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
                    <textarea name="address" cols="30" rows="5" id="address" onkeyup="checkaddress()"></textarea>
                    <td><p class="errorp" id="addressp"></p></td>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" class="btn green-btn" id="green-btn" value="Sign Up">
                <a href="./adminlogin.php"><input type="button" class="btn blue-btn" id="blue-btn" value="Back To Login"></a>
            </td>
            </tr>

        </table>
    </form>


        </div>
    </div>

    <script src="../Js/script.js"></script>
    <script src="../Js/buttonshover.js"></script>
</body>
</html>


