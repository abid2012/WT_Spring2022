<?php

if(isset($_POST["ViewUserData"]))
{
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $presult=$dbobj->ViewData($conobj,'user');
    if($presult->num_rows>0)
    {
        echo "<br>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Username</th>"."<th>Email</th>"."<th>Password</th>"."<th>Phone Number</th>"."<th>Date Of Birth</th>"."<th>Gender</th>"."<th>Language(s)</th>"."<th>Country</th>"."<th>Address</th>";
        echo "</tr>";
        while($row=$presult->fetch_assoc())
        {
            
            echo "<tr>";
            echo '<td>'.$row['Username'].'</td>';
            echo '<td>'.$row['Email'].'</td>';
            echo '<td>'.$row['Password'].'</td>';
            echo '<td>'.$row['Phone_Number'].'</td>';
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



if(isset($_POST["Searchbtn2"])){
    
    if(empty($_POST["Searchfield2"]))
    {
        echo "<br>";
        echo "<b>Search Field is empty</b>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $sresult=$dbobj->SearchAdmin($conobj,'user',$_POST["Searchfield2"]);
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
                $username2=$row['Username'];
                $email2=$row['Email'];
                $pass2=$row['Password'];
                $phone=$row['Phone_Number'];
                $dob2=$row['Date_Of_Birth'];
                $gender2=$row['Gender'];
                $languages2=$row['Languages'];
                $country2=$row['Country'];
                $address2=$row['Address'];
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



if(isset($_POST["Insert2"])){
    echo "<br>";
    if(empty($_POST["user2"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Username is empty</h3>";
      }
      else if(empty($_POST["e2"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["e2"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Please provide your email</h3>";
      }
      else if(empty($_POST["p2"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Password is empty</h3>";
      }
      else if(empty($_POST["ph"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Phone number is empty</h3>";
      }
      else if(empty($_POST["d2"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Date Of Birth is empty</h3>";
      }
      else if(empty($_POST["g2"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Gender is empty</h3>";
      }
      
      else if(empty($_POST["l2"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Language is empty</h3>";
      }

      else if(empty($_POST["c2"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Country is empty</h3>";
      }
      else if(empty($_POST["ad2"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Address is empty</h3>";
      }

      
      else  
      {  
          $user = $_POST["user2"];
          $email= $_POST["e2"];
          $pass = $_POST["p2"];
          $ph = $_POST["ph"];
          $dob = date('Y-m-d',strtotime($_POST["d2"]));
          $gender = $_POST["g2"];
          $languages = $_POST["l2"];
          $lan="";
          $country = $_POST["c2"];
          $address = $_POST["ad2"];


            $dbobj=new db();
            $conobj=$dbobj->opencon();

            foreach($languages as $item){
               $lan .= $item.",";
               $lan2 = rtrim($lan, ",");
            }

            $dbobj->InsertUserData($conobj,'user',$user,$email,$pass,$ph,$dob,$gender,$lan2,$country,$address);

            $dbobj->closecon($conobj);
          
      } 
}


if(isset($_POST["Update2"])){
    if(empty($_POST["email2"]) || empty($_POST["pass2"]) || empty($_POST["phone"]) || empty($_POST["dob2"]) || empty($_POST["gender2"]) || empty($_POST["languages2"]) || empty($_POST["country2"]) || empty($_POST["address2"]))
    {
        echo "<br>";
        echo "<h3>Field can not be empty</h3>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->UpdateUserData($conobj,'user',$_POST['username2'],$_POST['email2'],$_POST['pass2'],$_POST['phone'],$_POST['dob2'],$_POST['gender2'],$_POST['languages2'],$_POST['country2'],$_POST['address2']);
        $dbobj->closecon($conobj);
    }
}


if(isset($_POST['Delete2'])){
    if(empty($_POST['Deletefield2']))
    {
        echo "<br>";
        echo "<h3>Field is empty</h3>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->DeleteAdmin($conobj,'user',$_POST["Deletefield2"]);
        $dbobj->closecon($conobj);
    }
}

?>