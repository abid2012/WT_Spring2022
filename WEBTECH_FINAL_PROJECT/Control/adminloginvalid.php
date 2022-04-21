<?php

include "../Model/model.php";

session_start();

//static $first=true;

if(isset($_POST["Submit"]))
{
    
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $result=$dbobj->adminlogin($conobj,'admin',$_POST["username"],$_POST["pass"]);
    $row=$result->fetch_assoc();
    $count=$result->num_rows;

    if($count == 1){  
        //echo "<h1><center> Login successful </center></h1>";  

            $_SESSION['username'] = $_POST["username"];
            $_SESSION['pass'] = $_POST["pass"];
            
            
            if(empty($_POST["remember"]))
            {
                setcookie("username",$_POST["username"],60);
                setcookie("pass",$_POST["pass"],60);
                header("location: ../View/admindash.php");
            }
            else
            {
                //echo "not remember";
                setcookie("username",$_POST["username"],time()+60);
                setcookie("pass",$_POST["pass"],time()+60);
                header("location: ../View/admindash.php");
            }
    }  
    else{  
        echo "<h3> Login failed. Invalid username or password.</h3>";  
    }     
    
}

?>