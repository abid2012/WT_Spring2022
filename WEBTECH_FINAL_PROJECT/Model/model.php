<?php

class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="easytrip";

        $conn= new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "Could not connect";
        }
        return $conn;
    }

    function InsertData($conn,$tablename,$user,$email,$pass,$dob,$gender,$languages,$country,$address){
        $sql="INSERT INTO $tablename (Username,Email,Password,Date_Of_Birth,Gender,Languages,Country,Address) VALUES ('$user','$email','$pass','$dob','$gender','$languages','$country','$address')";
        
        if($conn->query($sql)===TRUE)
        {
            echo "<h3>Successful</h3>";
        }
        else
        {
            echo "<h3>Failed. Username already exists</h3>".$conn->error."<br>";
        }
    }

    function adminlogin($conn,$tablename,$user,$pass){
        $sql="SELECT * FROM $tablename WHERE Username='$user' AND Password='$pass'";
        $result=$conn->query($sql);
        return $result;
    }

    function ViewData($conn,$tablename){
        $sql="SELECT * FROM $tablename";

        $result=$conn->query($sql);
        return $result;
    }

    function SearchAdmin($conn,$tablename,$username){
        $sql="SELECT * FROM $tablename WHERE Username='$username'";

        $result=$conn->query($sql);
        return $result;
    }

    function UpdateData($conn,$tablename,$user,$email,$pass,$dob,$gender,$languages,$country,$address){
        $sql= "UPDATE $tablename SET Email='$email',Password='$pass',Date_Of_Birth='$dob',Gender='$gender',Languages='$languages',Country='$country',Address='$address' WHERE Username='$user'";

        if($conn->query($sql)===TRUE)
        {
            echo "<br>";
            echo "<h3>Admin updated</h3>";
        }
        else
        {
            echo "<h3>Error! Can't update Admin</h3>".$conn->error;
        }
    }

    function DeleteAdmin($conn,$tablename,$user){
        $sql= "DELETE FROM $tablename WHERE Username='$user'";

        if($conn->query($sql)===TRUE)
        {
            echo "<br>";
            echo "<h3>Deleted</h3>";
        }
        else
        {
            echo "<h3>Error! Can't Delete</h3>".$conn->error;
        }
    }


    function InsertUserData($conn,$tablename,$user,$email,$pass,$phone,$dob,$gender,$languages,$country,$address){
        $sql="INSERT INTO user (Username,Email,Password,Phone_Number,Date_Of_Birth,Gender,Languages,Country,Address) VALUES ('$user','$email','$pass','$phone','$dob','$gender','$languages','$country','$address')";
        
        if($conn->query($sql)===TRUE)
        {
            echo "<h3>Successful</h3>";
        }
        else
        {
            echo "<h3>Failed. Username already exists</h3>".$conn->error."<br>";
        }
    }

    function UpdateUserData($conn,$tablename,$user,$email,$pass,$phone,$dob,$gender,$languages,$country,$address){
        $sql= "UPDATE $tablename SET Email='$email',Password='$pass',Phone_Number='$phone',Date_Of_Birth='$dob',Gender='$gender',Languages='$languages',Country='$country',Address='$address' WHERE Username='$user'";

        if($conn->query($sql)===TRUE)
        {
            echo "<br>";
            echo "<h3>User updated</h3>";
        }
        else
        {
            echo "<h3>Error! Can't update User</h3>".$conn->error;
        }
    }

    function closecon($conn){
        $conn->close();
    }
}

?>