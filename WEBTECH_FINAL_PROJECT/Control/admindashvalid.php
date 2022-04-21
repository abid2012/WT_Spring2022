<?php

include "../Model/model.php";

if(isset($_POST["ViewAdminData"]))
{
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $presult=$dbobj->ViewData($conobj,'admin');
    if($presult->num_rows>0)
    {
        echo "<br>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Username</th>"."<th>Email</th>"."<th>Password</th>"."<th>Date Of Birth</th>"."<th>Gender</th>"."<th>Language(s)</th>"."<th>Country</th>"."<th>Address</th>";
        echo "</tr>";
        while($row=$presult->fetch_assoc())
        {
            
            echo "<tr>";
            echo '<td>'.$row['Username'].'</td>';
            echo '<td>'.$row['Email'].'</td>';
            echo '<td>'.$row['Password'].'</td>';
            echo '<td>'.$row['Date_Of_Birth'].'</td>';
            echo '<td>'.$row['Gender'].'</td>';
            echo '<td>'.$row['Languages'].'</td>';
            echo '<td>'.$row['Country'].'</td>';
            echo '<td>'.$row['Address'].'</td>';
            echo "</tr>";
            
        }
        echo "</table>"."<br>";
    }
    else
    {
        echo "No data found"."<br>"."<br>";
    }
    $dbobj->closecon($conobj);
}


if(isset($_POST["Searchbtn"])){
    
    if(empty($_POST["Searchfield"]))
    {
        echo "<br>";
        echo "<b>Search Field is empty</b>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $sresult=$dbobj->SearchAdmin($conobj,'admin',$_POST["Searchfield"]);
        if($sresult->num_rows>0)
        {
            //echo "<form action='' method='post'>";
            while($row=$sresult->fetch_assoc())
            {
                /*
                echo "<input type='text' name='fname' value='$row[fname]'>";
                echo "<input type='text' name='lname' value='$row[lname]'>";
                echo "<input type='text' name='age' value='$row[age]'>";
                echo "<input type='text' name='salary' value='$row[salary]'>";
                echo "<input type='text' name='address' value='$row[address]'>";
                */
                $username=$row['Username'];
                $email=$row['Email'];
                $pass=$row['Password'];
                $dob=$row['Date_Of_Birth'];
                $gender=$row['Gender'];
                $languages=$row['Languages'];
                $country=$row['Country'];
                $address=$row['Address'];
            }
            //echo "<input type='submit' name='Update' value='Update'>";

            //echo "</form>";
        }
        else
        {
            echo "<br>";
            echo "<h3>No data</h3>"."<br>";
        }
        $dbobj->closecon($conobj);
    }
}


if(isset($_POST["Update"])){
    if(empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["dob"]) || empty($_POST["gender"]) || empty($_POST["languages"]) || empty($_POST["country"]) || empty($_POST["address"]))
    {
        echo "<br>";
        echo "<h3>Field can not be empty</h3>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->UpdateData($conobj,'admin',$_POST['username'],$_POST['email'],$_POST['pass'],$_POST['dob'],$_POST['gender'],$_POST['languages'],$_POST['country'],$_POST['address']);
        $dbobj->closecon($conobj);
    }
}

if(isset($_POST["Insert"])){
    echo "<br>";
    if(empty($_POST["user"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Username is empty</h3>";
      }
      else if(empty($_POST["e"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["e"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Please provide your email</h3>";
      }
      else if(empty($_POST["p"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Password is empty</h3>";
      }
      else if(empty($_POST["d"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Date Of Birth is empty</h3>";
      }
      else if(empty($_POST["g"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Gender is empty</h3>";
      }
      
      else if(empty($_POST["l"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Language is empty</h3>";
      }

      else if(empty($_POST["c"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Country is empty</h3>";
      }
      else if(empty($_POST["ad"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Address is empty</h3>";
      }

      
      else  
      {  
          $user = $_POST["user"];
          $email= $_POST["e"];
          $pass = $_POST["p"];
          $dob = date('Y-m-d',strtotime($_POST["d"]));
          $gender = $_POST["g"];
          $languages = $_POST["l"];
          $lan="";
          $country = $_POST["c"];
          $address = $_POST["ad"];


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

if(isset($_POST['Delete'])){
    if(empty($_POST['Deletefield']))
    {
        echo "<br>";
        echo "<h3>Field is empty</h3>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->DeleteAdmin($conobj,'admin',$_POST["Deletefield"]);
        $dbobj->closecon($conobj);
    }
}



?>