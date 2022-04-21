<html>
<head>
    <title>Admin Registration</title>
</head>
<body>
    <h2>Admin Registration</h2>
    <form action="" method="post" enctype='multipart/form-data'>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="dob" max="2003-03-01"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
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
                    <textarea name="address" cols="30" rows="5"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Sign Up">
                <a href="./adminlogin.php"><input type="button" value="Back To Login"></a>
            </td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php
include "../Control/adminsignupvalid.php";
?>
