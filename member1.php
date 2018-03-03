
<?php   
session_start();  
if(!isset($_SESSION["sess_user"]))
{  
    header("location:testlogin.php");  
} else 
{
 ?>

<html>  
<head>  
    <style>   
	
       div.out
	   {
background-color:#7FF1E5;
padding:20px 16px;
height:70px;


	   }	
div.in a
{
text-decoration:none;
padding-left:30px;
font-size:28px;
padding-right:25px;
display:inline-block;
border:1px solid black;
height:50px;
}
div.in a:hover
{
background-color:pink;

}
img
{
width:100%;
height:50%;

}	
h1
{
	text-align:center;
}
          
    </style>  
</head>  
<body>  
<nav>
   <div class="out">
<div class="in">
<a href="bmi.html"> BMI CALCULATOR </a>
<a href="diet.html"> DIET CHART </a>
<a href=""> TRAINER DETAILS </a>
<a href="">  WORKOUT </a>
<a href="logout.php">  LOGOUT </a>
</div>
</div>
</nav>	

      
<h1>Welcome, <?=$_SESSION['sess_user'];?>! </h1>  
<img src="gym4.jpg">	
 
 
</body>  
</html>  
  <?php
}  
?>