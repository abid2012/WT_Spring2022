function searchdata(){
    var username=document.getElementById("searchfield").value;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("show").innerHTML=this.responseText;
        }
    };

    xhttp.open("POST","/php/WebtechFinalProject/Control/ajax.php",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username);
}