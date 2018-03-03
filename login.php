
<html>
<head>
<link rel="stylesheet" type="text/css" href="nv.css">
<script>
function validate()
{
var x=document.forms["fname"]["user"].value;
var y=document.forms["fname"]["password"].value;
if(x=="")
{
alert("Please enter user name");
return false;
}
else if(y=="")
{
alert ("Enter Password to continue");
 return false;
}
}


function my()
{
window.location.href="registert.php";
}

</script>


<style>
body
{
background-image:url("cv.jpg");
}h1{

text-align:center;
padding-top:10px;
}
.cont p
{
margin-top:120px;
text-align:center;
font-size:22px;
}
.cont{
background-color:#B0A39D;

margin-top:20px;
margin-left:40%;
top:7%;
padding-left:30px;
width:300px;
height:350px;
}
input[type=text],[type=password]
{
 padding: 6px 15px;
    display: inline-block;
    border: 3px solid #ccc;
    box-sizing: border-box;

}
input[type=submit],[type=button]
{
font-size:auto;
	cursor:pointer;
}


</style>
<body>

<div class="ts">
<p><h1>Career Guidance Platform</h1></p>
</div>
<div class="fs">
<a  id="fss"href="navtest.html">Home</a>
<a href="login.php">Login</a>
<a href="hiw.html">How it Works</a>



</div>

<div class="cont">

<p>Login to continue </p>
<hr>

<form action="" method="post"  id="myfn" name="fname" onsubmit="return validate()" >
Username :<br>
<input name="user" type="text"><br><br>
Password :<br>
<input name="password"type="password" >
<br><br>
<input type="submit" value=" Login " name="submit" > 
<br><br>
<input type="button" value=" Register " onclick="my()"> 

</form>
</div>


<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['password'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['password'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('user-registration') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location:inst.html");  
    }  
    }
	else 
	{  

    echo "Invalid Username or password !Try Again ";
    
	
	}  
  
} 
}  
?>  
</div>
</div>
</body>
</html>