<?php

include "../Control/datainsertcheck.php";

?>

<html>
<head>
    <title>Data Insert</title>
</head>
<body>
    <form action="" method="post">
        First Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lname">
        Age: <input type="number" name="age">
        Salary: <input type="number" name="salary">
        Address: <input type="text" name="address">
        <input type="submit" name="Insert" value="Insert">
    </form>

    <form action="" method="post">
        <input type="submit" name="ViewData" value="View Data">
    </form>

    <form action="" method="post">
        <input type="text" name="Search">
        <input type="submit" name="Searchbtn" value="Search">
    </form>

    <form action="" method="post">
        <input type="number" name="Id" value="<?php echo $id;?>">
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <input type="number" name="age" value="<?php echo $age;?>">
        <input type="number" name="salary" value="<?php echo $salary;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="submit" name="Update" value="Update">
    </form>
</body>
</html>