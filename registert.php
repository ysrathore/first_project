<!doctype html>  
<html>  
<head>
<link rel="stylesheet type="text/css" href="nv.css">
<script>

function validate()
{
var x=document.forms["frm"]["user"].value;	
var y=document.forms["frm"]["pass"].value;	
var z=document.forms["frm"]["reps"].value;	
var w=document.forms["frm"]["user"].value;		
	
	
	

if(y!=z)
{
	alert("Password should be same in both fields")
	return false;
}}



</script>
<style>
h1{

text-align:center;
padding-top:10px;
}
.ts
{
	
	margin-top:0px;
}
div.sign
{
	margin-top:45px;
	margin-left:40%;
	display:block;
	border:3 px solid;
	  background-color:#B0A39D;  
	  width:320px;
	  height:400px;
}
input[type=text],[type=password]
{
margin-top:10%;
margin-left:5%;	
}
div.sign form
{
	padding-left:20px;
}


</style>
</head>
<body>

<div class="ts">
<p><h1>Career Guidance Platform</h1></p>
</div>
<div class="fs">
<a  id="fss"href="navtest.html">Home</a>
<a href="login.php">Login</a>
<a href="hiw.html">How it Works</a>



</div>




<div class="sign">

<form action="" method="POST" name="frm" onsubmit="return validate()">  
   <br>       
Username: <br><input type="text" name="user">  <br>
Password: <br><input type="password" name="pass">  <br>
Re-Enter Password :<br> <input type="password" name="reps">  <br><br>
Contact Number :<br><input type="contact" name="cont"> <br>
<br>
<input type="submit" value="Register" name="submit" />  

</form>  
</div>
<?php  
if(isset($_POST["submit"]))
{  
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('user-registration') or die("cannot select DB");  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
   $result=mysql_query($sql);  
        if($result)
		{  
    echo "Account Successfully Created";  
    } 
	else {  
    echo "Failure!";  
    }  
  
    }
	else 
	{  
    echo "<h2><b>User already registered !Try Again </b></h2>";
    }  
  
} else {  
    echo "<h2><b>All fields are required!</b></h2>";  
}  
}  
?>  
</body>  
</html>   