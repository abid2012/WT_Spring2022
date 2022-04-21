<?php

include "../Model/model.php";
$fname=$lname=$age=$salary=$address=$id="";

if(isset($_POST["Submit"]))
{
    if(empty($_POST["username"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Username is empty</h3>";
      }
      else if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Please provide your email</h3>";
      }
      else if(empty($_POST["pass"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Password is empty</h3>";
      }
      else if(empty($_POST["dob"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Date Of Birth is empty</h3>";
      }
      else if(empty($_POST["gender"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Gender is empty</h3>";
      }
      
      else if(empty($_POST["language"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Language is empty</h3>";
      }

      else if(empty($_POST["country"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Country is empty</h3>";
      }
      else if(empty($_POST["address"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Address is empty</h3>";
      }

      
      else  
      {  
          $user = $_POST["username"];
          $email= $_POST["email"];
          $pass = $_POST["pass"];
          $dob = date('Y-m-d',strtotime($_POST["dob"]));
          $gender = $_POST["gender"];
          $languages = $_POST["language"];
          $lan="";
          $country = $_POST["country"];
          $address = $_POST["address"];


            $dbobj=new db();
            $conobj=$dbobj->opencon();

            foreach($languages as $item){
               $lan .= $item.",";
               $lan2 = rtrim($lan, ",");
            }

            $dbobj->InsertData($conobj,'admin',$user,$email,$pass,$dob,$gender,$lan2,$country,$address);

            $dbobj->closecon($conobj);
          
      } 

}

?>