<!DOCTYPE html>
<html>
<head>
    <title>Task 1</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>

    <table>
    <form>
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
                <td><input type="radio" name="desig">Junior Programmer
                <input type="radio" name="desig">Senior Programmer
                <input type="radio" name="desig">Project Lead
                </td>
            </tr>
            <tr>
                <td>Preferred language: </td>
                <td><input type="checkbox" name="pl">JAVA 
                <input type="checkbox" name="pl">PHP
                <input type="checkbox" name="pl">C++
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="e-mail"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Please choose a file</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td><input type="submit">
                <input type="reset">
                </td>
            </tr>
    </form>
    </table>

</body>
</html>