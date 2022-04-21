function checkusername(){
    var username = document.getElementById("username").value;


    if(username.length<4)
    {
        document.getElementById("usernamep").innerHTML="Username must be greater than 3";
        return false;
    }
    else
    {
        document.getElementById("usernamep").innerHTML="";
        return true;
    }
    
}


function checkemail(){
    var email= document.getElementById("email").value;
    if(!email)
    {
        document.getElementById("emailp").innerHTML="Please provide your email";
        return false;
        
       
    }
    else
    {
        document.getElementById("emailp").innerHTML="";
        return true;
    }
}

function checkpass(){
    var pass= document.getElementById("pass").value;
    if(pass.length<6)
    {
        document.getElementById("passp").innerHTML="Password must be gretaer than 5";
        return false;
       
    }
    else
    {
        document.getElementById("passp").innerHTML="";
        return true;
    }
}


function checkdob(){
    var dob= document.getElementById("dob").value;
    if(!dob)
    {
        document.getElementById("dobp").innerHTML="Date Of Birth is required";
        return false;
        
       
    }
    else
    {
        document.getElementById("dobp").innerHTML="";
        return true;
    }
}

function checkaddress(){
    var address= document.getElementById("address").value;
    if(!address)
    {
        document.getElementById("addressp").innerHTML="Address is required";
        return false;
        
       
    }
    else
    {
        document.getElementById("addressp").innerHTML="";
        return true;
    }
}

function adminresult(){
    return checkusername(),checkemail(),checkpass(),checkdob(),checkaddress();
}

