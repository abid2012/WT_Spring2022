<!DOCTYPE html>
<html>
<head>
    <title>Task 2</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>

    <table>
    <form action="" method="post" enctype='multipart/form-data'>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td><input type="radio" name="desig" value="Junior Programmer">Junior Programmer
                <input type="radio" name="desig" value="Senior Programmer">Senior Programmer
                <input type="radio" name="desig" value="Project Lead">Project Lead
                </td>
            </tr>
            <tr>
                <td>Preferred language: </td>
                <td><input type="checkbox" name="java" value="JAVA">JAVA 
                <input type="checkbox" name="php" value="PHP">PHP
                <input type="checkbox" name="cpp" value="C++">C++
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="e-mail"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Please choose a file</td>
                <td><input type="file" name="myfile"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit">
                <input type="reset">
                </td>
            </tr>
    </form>
    </table>

    <br>

</body>
</html>

<?php
include "../Control/task2valid.php";
?>