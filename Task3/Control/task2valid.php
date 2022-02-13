<?php

if(isset($_POST["Submit"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $pass=$_POST["pass"];
    $email=$_POST["e-mail"];

    if(empty($fname)){
        echo "Please enter a valid first name";
    }
    else{
        echo "First name: ".$fname;
    }
    echo "<br>";
    if(empty($lname)){
        echo "Please enter a valid Last name";
    }
    else{
        echo "Last name: ".$lname;
    }
    echo "<br>";
    if(empty($age)){
        echo "Please enter a valid Age";
    }
    else{
        echo "Age: ".$age;
    }
    echo "<br>";
    if(!empty($_POST["desig"])){
        echo "Designation: ".$_POST["desig"];
    }
    else{
        echo "Please select a designation";
    }
    echo "<br>";
    if(empty($_POST["java"]) && empty($_POST["php"]) && empty($_POST["cpp"])){
        echo "Please select at least one preferred language";
    }
    else{
        if(!empty($_POST["java"])){
            echo "Preferred language: ".$_POST["java"];
        }
        echo "<br>";
        if(!empty($_POST["php"])){
            echo "Preferred language: ".$_POST["php"];
        }
        echo "<br>";
        if(!empty($_POST["cpp"])){
            echo "Preferred language: ".$_POST["cpp"];
        }
    }
    echo "<br>";
    if(empty($pass)){
        echo "Please enter a password";
    }
    else if(strlen($pass)<8){
        echo "Your password must be 8 or more characters";
    }
    else{
        echo "Your Password is ok";
    }
    echo "<br>";
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "you must enter email";
}
else{
    echo "your email is ".$email;
}

echo "<br>";


$extension = pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION);


if($extension=='jpg'){
    if($_FILES['myfile']['size']<2000000){
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], '../Files/'. $_FILES["myfile"]["name"])) {
            echo "Uploaded";
        } else {
            echo "File not uploaded";
        }
    
    }
    else{
        echo "File size must be less than 2 MB";
    }
}
else{
    echo "Only jpg";
}
}

?>