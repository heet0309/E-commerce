<?php 
include "c_header.php";
?>
<?php 



 
if (isset($_POST['btn'])) 
{
 
 	$cn=$_POST['2'];
 	$em=$_POST['3'];
 	$Pw=$_POST['4'];
 	
	$add=$_POST['6'];
	$un=$_POST['7'];
 	$con=mysqli_connect("localhost","root","","project_db");
 	$q="insert into tb_registration values('','$un','$em','$Pw','$cn','$add')";
 	$c=mysqli_query($con,$q);

 	
 }
 ?> 


<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER PANEL</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
        />      
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="c_index.php">Home</a></li>
		  <li class="active">Registration</li>
		 </ol>
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <form action="#" method="post" enctype="multipart/form-data">
				 	<ul>
						 <li class="text-info">User Name:</li>
						 <li><input type="text" name="7" value=""></li>
					 </ul>	
				 	 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" name="2" value=""></li>
					 </ul>	
					<ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" name="3" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" name="4" value=""></li>
					 </ul>
					  <ul>
						 <li class="text-info">Address:</li>
						 <li><input type="text" name="6" value=""></li>
					 </ul>	

			 <input  type="submit" value="Register Now" name="btn">
								
				
					
				 </form>
			 </div>
		 </div>
	</body>	 
    </html>

 <?php
 include "c_fotter.php";
 ?>		 